<?php
App::uses('ShopDetailEn', 'Model');

/**
 * ShopDetailEn Test Case
 */
class ShopDetailEnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shop_detail_en'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShopDetailEn = ClassRegistry::init('ShopDetailEn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShopDetailEn);

		parent::tearDown();
	}

}
