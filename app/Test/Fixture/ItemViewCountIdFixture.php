<?php
/**
 * ItemViewCountId Fixture
 */
class ItemViewCountIdFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'item_view_count_id';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_view_count_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_view_count_id', 'unique' => 1)
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
			'item_view_count_id' => 1,
			'count' => 1,
			'created_date' => '2015-09-21 17:45:29',
			'updated_date' => '2015-09-21 17:45:29',
			'del_flg' => 1
		),
	);

}
