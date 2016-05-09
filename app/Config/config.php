<?php
#-----------------------------------------------
# Config File
#-----------------------------------------------

// 環境設定
if (is_dir(ROOT . '/../_local')) {
	define('ENVIRONMENT', 'local');
} elseif (is_dir(ROOT . '/../_dev')) {
	define('ENVIRONMENT', 'development');
} else {
	define('ENVIRONMENT', 'test');
}

// 必須マーク
define('REQUIRE_MARK', '&nbsp;<span style="color: red;">*</span>');

// フォーム設定
$config['form'] = array(
	'User' => array(
		'username' => array(
			'between' => REQUIRE_MARK,
			'maxlength' => 128,
		),
		'password' => array(
			'between' => REQUIRE_MARK,
			'maxlength' => 1024
		),
		'email' => array(
			'between' => REQUIRE_MARK,
			'maxlengh' => 255
		),
	)
);

// アソシエーション情報
$config['assoc_info'] = array(
	'Remark' => array(
		'belongsTo' => array('User')
	),
	'User' => array(
		'hasMany' => array('Remark'),
	),
);

$config['jp_pref'] = array(
	'1' => '北海道', '2' => '青森県', '3' => '岩手県', '4' => '宮城県', '5' => '秋田県',
	'6' => '山形県', '7' => '福島県', '8' => '茨城県', '9' => '栃木県', '10' => '群馬県',
	'11' => '埼玉県', '12' => '千葉県', '13' => '東京都', '14' => '神奈川県', '15' => '新潟県',
	'16' => '富山県', '17' => '石川県', '18' => '福井県', '19' => '山梨県', '20' => '長野県',
	'21' => '岐阜県', '22' => '静岡県', '23' => '愛知県', '24' => '三重県', '25' => '滋賀県',
	'26' => '京都府', '27' => '大阪府', '28' => '兵庫県', '29' => '奈良県', '30' => '和歌山県',
	'31' => '鳥取県', '32' => '島根県', '33' => '岡山県', '34' => '広島県', '35' => '山口県',
	'36' => '徳島県', '37' => '香川県', '38' => '愛媛県', '39' => '高知県', '40' => '福岡県',
	'41' => '佐賀県', '42' => '長崎県', '43' => '熊本県', '44' => '大分県', '45' => '宮崎県',
	'46' => '鹿児島県', '47' => '沖縄県'
);

switch (ENVIRONMENT) {

	case 'local':
		define('TWITTER_CONSUMER_KEY', '6lwtDAC3FOs5k2a7CPdPyDAOY');
		define('TWITTER_CONSUMER_SECRET', 'mvMiuUZqzKePQXocor0B8BGKB4mYrAtBZFkcaXcceidp2zT0if');
		define('TWITTER_ACCESS_TOKEN', '726292484607762432-XVi2EFBBKWBaI5OUD2lg5hwJpA2L0RQ');
		define('TWITTER_ACCESS_TOKEN_SECRET', 'RY4XUv6uxF7PLJzlp2eOF6k7eRPyY6EsdaEUKkRtBVKX2');
		break;
	case 'development':
	case 'test':
		define('TWITTER_CONSUMER_KEY', '6lwtDAC3FOs5k2a7CPdPyDAOY');
		define('TWITTER_CONSUMER_SECRET', 'mvMiuUZqzKePQXocor0B8BGKB4mYrAtBZFkcaXcceidp2zT0if');
		define('TWITTER_ACCESS_TOKEN', '726292484607762432-XVi2EFBBKWBaI5OUD2lg5hwJpA2L0RQ');
		define('TWITTER_ACCESS_TOKEN_SECRET', 'RY4XUv6uxF7PLJzlp2eOF6k7eRPyY6EsdaEUKkRtBVKX2');
		break;
}
