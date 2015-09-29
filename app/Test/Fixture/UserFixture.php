<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_profile_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_facebook_login_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_admin_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_id', 'unique' => 1)
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
			'user_id' => 1,
			'user_profile_id' => 1,
			'user_facebook_login_id' => 1,
			'user_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'reported_count' => 1,
			'user_admin_id' => 1,
			'created_date' => '2015-09-22 07:57:31',
			'updated_date' => '2015-09-22 07:57:31',
			'del_flg' => 1
		),
	);

}
