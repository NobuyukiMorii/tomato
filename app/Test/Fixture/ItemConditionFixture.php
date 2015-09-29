<?php
/**
 * ItemCondition Fixture
 */
class ItemConditionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'item_condition';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_condition_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'item_stock_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_stock_condition' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_condition_id', 'unique' => 1)
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
			'item_condition_id' => 1,
			'item_stock_id' => 1,
			'item_stock_condition' => 1,
			'created_date' => '2015-09-21 17:34:28',
			'updated_date' => '2015-09-21 17:34:28',
			'del_flg' => 1
		),
	);

}
