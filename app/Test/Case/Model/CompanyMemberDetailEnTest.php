<?php
App::uses('CompanyMemberDetailEn', 'Model');

/**
 * CompanyMemberDetailEn Test Case
 */
class CompanyMemberDetailEnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_member_detail_en'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyMemberDetailEn = ClassRegistry::init('CompanyMemberDetailEn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyMemberDetailEn);

		parent::tearDown();
	}

}
