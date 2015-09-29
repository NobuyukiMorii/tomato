<?php
App::uses('CompanyDetailEn', 'Model');

/**
 * CompanyDetailEn Test Case
 */
class CompanyDetailEnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_detail_en'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyDetailEn = ClassRegistry::init('CompanyDetailEn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyDetailEn);

		parent::tearDown();
	}

}
