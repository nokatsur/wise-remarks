<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Remark $Remark
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => '入力が必須です。',
			),
			'maxLength' => array(
				'rule' => array('maxLength', 128),
				'message' => array('%d文字以内で入力してください。', 128),
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => '入力が必須です。',
			),
			'maxLength' => array(
				'rule' => array('maxLength', 1024),
				'message' => array('%d文字以内で入力してください。', 1024),
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => '入力が必須です。',
			),
			'email' => array(
				'rule' => array('email'),
				'message' => array('Eメールアドレスをご確認ください。'),
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Remark' => array(
			'className' => 'Remark',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

/**
 * 保存前にパスワードの暗号化
 *
 * @param array $options オプション
 * @return bool
 */
	public function beforeSave($options = array()) {
		parent::beforeSave($options);
		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		return true;
	}
}
