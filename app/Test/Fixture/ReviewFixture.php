<?php
/**
 * Review Fixture
 */
class ReviewFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'review';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'review_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'review' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'review_photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'point' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'review_id', 'unique' => 1)
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
			'review_id' => 1,
			'user_id' => 1,
			'item_id' => 1,
			'review' => 'Lorem ipsum dolor sit amet',
			'review_photo_id' => 1,
			'point' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-22 07:44:34',
			'updated_date' => '2015-09-22 07:44:34',
			'del_flg' => 1
		),
	);

}
