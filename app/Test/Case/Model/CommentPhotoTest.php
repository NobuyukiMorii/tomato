<?php
App::uses('CommentPhoto', 'Model');

/**
 * CommentPhoto Test Case
 */
class CommentPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comment_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommentPhoto = ClassRegistry::init('CommentPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentPhoto);

		parent::tearDown();
	}

}
