<?php
App::uses('PurchaseStatus', 'Model');

/**
 * PurchaseStatus Test Case
 */
class PurchaseStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchase_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PurchaseStatus = ClassRegistry::init('PurchaseStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PurchaseStatus);

		parent::tearDown();
	}

}
