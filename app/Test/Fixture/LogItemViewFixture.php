<?php
/**
 * LogItemView Fixture
 */
class LogItemViewFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'log_item_view';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'log_item_view_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'device' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'log_item_view_id', 'unique' => 1)
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
			'log_item_view_id' => 1,
			'item_id' => 1,
			'user_id' => 1,
			'device' => 'Lorem ipsum dolor sit amet',
			'created_date' => '2015-09-21 17:46:54',
			'updated_date' => '2015-09-21 17:46:54',
			'del_flg' => 1
		),
	);

}
