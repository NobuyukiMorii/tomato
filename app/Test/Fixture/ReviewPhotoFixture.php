<?php
/**
 * ReviewPhoto Fixture
 */
class ReviewPhotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'review_photo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'review_photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'review_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'review_photo_id', 'unique' => 1)
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
			'review_photo_id' => 1,
			'review_id' => 1,
			'photo_id' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-22 07:47:03',
			'updated_date' => '2015-09-22 07:47:03',
			'del_flg' => 1
		),
	);

}
