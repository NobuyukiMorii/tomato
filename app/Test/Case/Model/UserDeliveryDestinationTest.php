<?php
App::uses('UserDeliveryDestination', 'Model');

/**
 * UserDeliveryDestination Test Case
 */
class UserDeliveryDestinationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_delivery_destination'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserDeliveryDestination = ClassRegistry::init('UserDeliveryDestination');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserDeliveryDestination);

		parent::tearDown();
	}

}
