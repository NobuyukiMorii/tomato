<?php
App::uses('ShopType', 'Model');

/**
 * ShopType Test Case
 */
class ShopTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shop_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShopType = ClassRegistry::init('ShopType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShopType);

		parent::tearDown();
	}

}
