<?php
class DATABASE_CONFIG {

	public $default = array();

	public $local = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'admin001',
		'password' => 'password',
		'database' => 'wise_remarks_local',
		'prefix' => '',
		'encoding' => 'utf8'
	);

	public $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'mysql6.minibird.netowl.jp',
		'login' => 'norabal_admin',
		'password' => 'noalTr18',
		'database' => 'norabal_remarks',
		'prefix' => '',
		'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => '',
		'database' => 'database_name',
		'prefix' => '',
		'encoding' => 'utf8'
	);

/**
 * Decide which DB will be used depends on working environment
 */
	public function __construct() {
		$this->default = $this->{ENVIRONMENT};
	}
}
