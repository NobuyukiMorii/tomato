<?php
/**
 * UserFacebookLoginInfo Fixture
 */
class UserFacebookLoginInfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_facebook_login_info';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_facebook_login_info_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'facebook_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'facebook_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_facebook_login_info_id', 'unique' => 1)
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
			'user_facebook_login_info_id' => 1,
			'user_id' => 1,
			'facebook_id' => '',
			'facebook_name' => 'Lorem ipsum dolor sit amet',
			'created_date' => '2015-09-22 08:04:32',
			'updated_date' => '2015-09-22 08:04:32',
			'del_flg' => 1
		),
	);

}
