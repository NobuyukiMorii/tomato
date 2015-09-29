<?php
/**
 * ItemStock Fixture
 */
class ItemStockFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'item_stock';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_stock_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cost' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'shop_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'get_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'sell_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'buyer' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_condition_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_stock_id', 'unique' => 1)
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
			'item_stock_id' => 1,
			'cost' => 1,
			'shop_id' => 1,
			'status' => 1,
			'get_date' => '2015-09-21 17:44:21',
			'sell_date' => '2015-09-21 17:44:21',
			'buyer' => 1,
			'item_condition_id' => 1,
			'created_date' => '2015-09-21 17:44:21',
			'updated_date' => '2015-09-21 17:44:21',
			'del_flg' => 1
		),
	);

}
