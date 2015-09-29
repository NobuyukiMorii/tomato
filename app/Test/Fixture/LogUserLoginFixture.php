<?php
/**
 * LogUserLogin Fixture
 */
class LogUserLoginFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'log_user_login';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'log_user_access_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'login_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'login_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_data' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'log_user_access_id', 'unique' => 1)
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
			'log_user_access_id' => 1,
			'user_id' => 1,
			'login_date' => '2015-09-21 17:47:52',
			'login_type' => 1,
			'status' => 1,
			'created_date' => '2015-09-21 17:47:52',
			'updated_data' => '2015-09-21 17:47:52',
			'del_flg' => 1
		),
	);

}
