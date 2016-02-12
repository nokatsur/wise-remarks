<?php
/**
 * 動的なモデルのアソシエーションを実行するコンポーネント
 *
 * 【使用方法】
 * １, アソシエーションを生成したいコントローラーのbeforeFilterメソッド内で
 * 『$this->Assoc = $this->Components->load('Assoc');』を記入してください。
 *
 * ２, アソシエーションを開始したいアクション、またはbeforeFilterメソッド内で
 * 『$this->Assoc->bindModels();』を記入してください。
 *
 *【注意】
 * DBの設計がCakePHPの規約に従っていることが前提条件ですが、
 * 多少の融通は設定でカバーできます。
 *
 * 不可能なパターンは1つのモデルが２つ以上の別モデルとアソシエーションされ、
 * かつ、それぞれのforeign_keyが異なる場合。
 * アソシエーションを貼ろうとする対象モデルのprimary_keyが対応できません。
 *
 * @author Norabal
 */
class AssocComponent extends Component {

/**
 * アソシエーションの連結情報
 * /app/Configディレクトリ下の設定ファイルに記載して、Configure::readで呼び出すようにする？
 *
 * @var array
 */
	public $assocInfo = array(
		'FirstModel' => array(
			'hasMany' => array('AModel', 'BModel', 'CModel'),
			'belongsTo' => array('DModel', 'EModel')
		),
		'SecondModel' => array(
			'hasMany' => array(
				'AModel' => array('foreignKey' => 'foreign_id'),
				'BModel' => array('foreignKey' => 'foreign_id'),
			)
		),
		'ThirdModel' => array(
			'belongsTo' => array('FModel')
		),
	);

/**
 * 初期処理
 * コントローラの beforeFilter メソッドの後、アクションハンドラの前に呼び出される
 *
 * @param type $controller コントローラー
 * @return void
 */
	public function startup(Controller $controller) {
		// コントローラを取得
		$this->controller = $controller;
	}

/**
 * アソシエーションを張る
 *
 * @return void
 * @see http://book.cakephp.org/2.0/ja/models/associations-linking-models-together.html#dynamic-associations
 */
	public function bindModels() {
		// 処理中のコントローラが利用している各モデルへアソシエーションを張る
		foreach ($this->controller->uses as $model) {
			// 連結情報未記入のモデルはスキップ
			if (!isset($this->assocInfo[$model])) {
				continue;
			}

			// モデルのロード漏れ防止
			$this->__loadModel($model);

			// 連結情報の調整
			$this->__unsetUnusesModel($model);

			// 各モデルにContainableビヘイビアの追加読み込みと、recursiveを-1にすることで
			// 意図しないモデルへのクエリ発行を防止
			$this->{$model}->Behaviors->load('Containable');
			$this->{$model}->recursive = -1;

			// bindModelメソッドの第二引数をfalseにすることで、アソシエーションの永続化
			$this->{$model}->bindModel($this->assocInfo[$model], false);
		}
	}

/**
 * コントローラのloadModelと同じように使えるメソッド
 * $this->controller->モデル名->メソッド・プロパティという記述から
 * 「controller->」部分を省略できるようになる
 *
 * @param str $modelName コンポーネントで使用したモデル名
 * @return void
 * @see http://www.happyquality.com/2012/08/24/2449.htm#footnote_0_2449
 */
	private function __loadModel($modelName) {
		if (!empty($this->{$modelName})) {
			// すでに存在すればそのままreturn
			return;
		} elseif (!empty($this->controller->{$modelName})) {
			// 呼び出し元のコントローラでusesしてあれば$this->{モデル名}に参照渡し
			$this->{$modelName} = $this->controller->{$modelName};
		} else {
			// コントローラでusesしていなければコンポーネントでモデルを読み込む
			App::uses($modelName, 'Model');
			// @TODO 「ClassRegistry::init($modelName);」のほうがよいか検証
			$this->{$modelName} = new $modelName;
		}
	}

/**
 * 連結情報の各アソシエーションタイプから、コントローラーのusesプロパティで
 * 指定されていないモデルを外す
 *
 * @param type $model モデル名
 * @return void
 */
	private function __unsetUnusesModel($model) {
		foreach ($this->{$model}->_associations as $assocType) {
			$config = $this->assocInfo[$model][$assocType];
			$uses = $this->controller->uses;

			if (!isset($config) || !is_array($config)) {
				continue;
			}

			foreach (array_diff($config, $uses) as $val) {
				$key = array_search($val, $config);
				if ($key !== false) {
					unset($this->assocInfo[$model][$assocType][$key]);
				}
			}
		}
	}

}
