<?php
App::uses('Remark', 'Model');

/**
 * Remark Test Case
 *
 */
class RemarkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.remark',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Remark = ClassRegistry::init('Remark');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Remark);

		parent::tearDown();
	}

}
