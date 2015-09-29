<?php
App::uses('ItemDetailJp', 'Model');

/**
 * ItemDetailJp Test Case
 */
class ItemDetailJpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_detail_jp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemDetailJp = ClassRegistry::init('ItemDetailJp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemDetailJp);

		parent::tearDown();
	}

}
