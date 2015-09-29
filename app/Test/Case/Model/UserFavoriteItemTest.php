<?php
App::uses('UserFavoriteItem', 'Model');

/**
 * UserFavoriteItem Test Case
 */
class UserFavoriteItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_favorite_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserFavoriteItem = ClassRegistry::init('UserFavoriteItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserFavoriteItem);

		parent::tearDown();
	}

}
