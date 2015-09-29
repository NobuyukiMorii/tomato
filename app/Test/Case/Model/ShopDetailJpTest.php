<?php
App::uses('ShopDetailJp', 'Model');

/**
 * ShopDetailJp Test Case
 */
class ShopDetailJpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shop_detail_jp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShopDetailJp = ClassRegistry::init('ShopDetailJp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShopDetailJp);

		parent::tearDown();
	}

}
