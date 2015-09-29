<?php
App::uses('CompanyMemberDetailTw', 'Model');

/**
 * CompanyMemberDetailTw Test Case
 */
class CompanyMemberDetailTwTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_member_detail_tw'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyMemberDetailTw = ClassRegistry::init('CompanyMemberDetailTw');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyMemberDetailTw);

		parent::tearDown();
	}

}
