<?php
App::uses('LogUserLogin', 'Model');

/**
 * LogUserLogin Test Case
 */
class LogUserLoginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.log_user_login'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LogUserLogin = ClassRegistry::init('LogUserLogin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LogUserLogin);

		parent::tearDown();
	}

}
