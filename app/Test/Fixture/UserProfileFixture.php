<?php
/**
 * UserProfile Fixture
 */
class UserProfileFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_profile';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'nickname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'age' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'language_code' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_profile_id', 'unique' => 1),
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
			'user_profile_id' => 1,
			'user_id' => 1,
			'nickname' => 'Lorem ipsum dolor sit amet',
			'gender' => 1,
			'age' => 1,
			'language_code' => 1,
			'created_date' => '2015-09-22 08:08:04',
			'updated_date' => '2015-09-22 08:08:04',
			'del_flg' => 1
		),
	);

}
