<?php
App::uses('UserAdmin', 'Model');

/**
 * UserAdmin Test Case
 */
class UserAdminTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_admin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserAdmin = ClassRegistry::init('UserAdmin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserAdmin);

		parent::tearDown();
	}

}
