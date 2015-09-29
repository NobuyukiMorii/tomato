<?php
App::uses('LogItemView', 'Model');

/**
 * LogItemView Test Case
 */
class LogItemViewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.log_item_view'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LogItemView = ClassRegistry::init('LogItemView');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LogItemView);

		parent::tearDown();
	}

}
