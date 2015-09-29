<?php
App::uses('PhotoSize', 'Model');

/**
 * PhotoSize Test Case
 */
class PhotoSizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.photo_size'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhotoSize = ClassRegistry::init('PhotoSize');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhotoSize);

		parent::tearDown();
	}

}
