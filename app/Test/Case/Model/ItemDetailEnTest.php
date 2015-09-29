<?php
App::uses('ItemDetailEn', 'Model');

/**
 * ItemDetailEn Test Case
 */
class ItemDetailEnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_detail_en'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemDetailEn = ClassRegistry::init('ItemDetailEn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemDetailEn);

		parent::tearDown();
	}

}
