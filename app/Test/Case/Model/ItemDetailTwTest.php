<?php
App::uses('ItemDetailTw', 'Model');

/**
 * ItemDetailTw Test Case
 */
class ItemDetailTwTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_detail_tw'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemDetailTw = ClassRegistry::init('ItemDetailTw');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemDetailTw);

		parent::tearDown();
	}

}
