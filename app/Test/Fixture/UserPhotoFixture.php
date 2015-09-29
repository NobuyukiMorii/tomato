<?php
/**
 * UserPhoto Fixture
 */
class UserPhotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_photo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'profile_photo_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_photo_id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'user_photo_id' => 1,
			'user_id' => 1,
			'photo_id' => 1,
			'profile_photo_flg' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-22 08:06:48',
			'updated_date' => '2015-09-22 08:06:48',
			'del_flg' => 1
		),
	);

}
