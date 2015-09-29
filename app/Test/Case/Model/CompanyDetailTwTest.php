<?php
App::uses('CompanyDetailTw', 'Model');

/**
 * CompanyDetailTw Test Case
 */
class CompanyDetailTwTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_detail_tw'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyDetailTw = ClassRegistry::init('CompanyDetailTw');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyDetailTw);

		parent::tearDown();
	}

}
