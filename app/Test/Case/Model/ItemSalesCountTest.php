<?php
App::uses('ItemSalesCount', 'Model');

/**
 * ItemSalesCount Test Case
 */
class ItemSalesCountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_sales_count'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemSalesCount = ClassRegistry::init('ItemSalesCount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemSalesCount);

		parent::tearDown();
	}

}
