<?php
App::uses('ShopDetailTw', 'Model');

/**
 * ShopDetailTw Test Case
 */
class ShopDetailTwTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shop_detail_tw'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShopDetailTw = ClassRegistry::init('ShopDetailTw');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShopDetailTw);

		parent::tearDown();
	}

}
