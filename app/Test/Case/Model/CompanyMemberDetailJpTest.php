<?php
App::uses('CompanyMemberDetailJp', 'Model');

/**
 * CompanyMemberDetailJp Test Case
 */
class CompanyMemberDetailJpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_member_detail_jp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyMemberDetailJp = ClassRegistry::init('CompanyMemberDetailJp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyMemberDetailJp);

		parent::tearDown();
	}

}
