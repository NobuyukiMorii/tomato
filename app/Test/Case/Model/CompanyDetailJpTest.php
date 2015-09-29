<?php
App::uses('CompanyDetailJp', 'Model');

/**
 * CompanyDetailJp Test Case
 */
class CompanyDetailJpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_detail_jp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyDetailJp = ClassRegistry::init('CompanyDetailJp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyDetailJp);

		parent::tearDown();
	}

}
