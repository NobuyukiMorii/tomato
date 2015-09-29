<?php
App::uses('UserWishItem', 'Model');

/**
 * UserWishItem Test Case
 */
class UserWishItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_wish_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserWishItem = ClassRegistry::init('UserWishItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserWishItem);

		parent::tearDown();
	}

}
