<?php
App::uses('ItemViewCountId', 'Model');

/**
 * ItemViewCountId Test Case
 */
class ItemViewCountIdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_view_count_id'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemViewCountId = ClassRegistry::init('ItemViewCountId');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemViewCountId);

		parent::tearDown();
	}

}
