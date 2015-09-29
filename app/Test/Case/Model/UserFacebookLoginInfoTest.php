<?php
App::uses('UserFacebookLoginInfo', 'Model');

/**
 * UserFacebookLoginInfo Test Case
 */
class UserFacebookLoginInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_facebook_login_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserFacebookLoginInfo = ClassRegistry::init('UserFacebookLoginInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserFacebookLoginInfo);

		parent::tearDown();
	}

}
