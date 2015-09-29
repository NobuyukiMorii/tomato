<?php
App::uses('CompanyMember', 'Model');

/**
 * CompanyMember Test Case
 */
class CompanyMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyMember = ClassRegistry::init('CompanyMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyMember);

		parent::tearDown();
	}

}
