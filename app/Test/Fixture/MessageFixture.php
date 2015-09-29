<?php
/**
 * Message Fixture
 */
class MessageFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'message';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'message_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'message' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'message_id', 'unique' => 1)
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
			'message_id' => 1,
			'message' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'count' => 1,
			'photo_id' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-21 23:49:07',
			'updated_date' => '2015-09-21 23:49:07',
			'del_flg' => 1
		),
	);

}
