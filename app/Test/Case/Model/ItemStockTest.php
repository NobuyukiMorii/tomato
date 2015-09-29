<?php
App::uses('ItemStock', 'Model');

/**
 * ItemStock Test Case
 */
class ItemStockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_stock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemStock = ClassRegistry::init('ItemStock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemStock);

		parent::tearDown();
	}

}
