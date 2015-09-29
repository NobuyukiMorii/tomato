<?php
App::uses('ReviewPhoto', 'Model');

/**
 * ReviewPhoto Test Case
 */
class ReviewPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.review_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReviewPhoto = ClassRegistry::init('ReviewPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReviewPhoto);

		parent::tearDown();
	}

}
