<?php
/**
 * CommentPhoto Fixture
 */
class CommentPhotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'comment_photo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'comment_photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'comment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'comment_photo_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'comment_photo_id' => 1,
			'comment_id' => 1,
			'photo_id' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-21 17:28:16',
			'updated_date' => '2015-09-21 17:28:16',
			'del_flg' => 1
		),
	);

}
