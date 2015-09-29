<?php
App::uses('UserPhoto', 'Model');

/**
 * UserPhoto Test Case
 */
class UserPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserPhoto = ClassRegistry::init('UserPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserPhoto);

		parent::tearDown();
	}

}
