<?php
App::uses('ItemCondition', 'Model');

/**
 * ItemCondition Test Case
 */
class ItemConditionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_condition'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemCondition = ClassRegistry::init('ItemCondition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemCondition);

		parent::tearDown();
	}

}
