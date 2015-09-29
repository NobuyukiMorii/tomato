<?php
/**
 * Item Fixture
 */
class ItemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'item';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'item_detail__id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_stock_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'shop_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'admin_user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_view_count_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_sales_count_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'started_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_id', 'unique' => 1)
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
			'item_id' => 1,
			'item_detail__id' => 1,
			'item_stock_id' => 1,
			'category_id' => 1,
			'price' => 1,
			'shop_id' => 1,
			'photo_id' => 1,
			'admin_user_id' => 1,
			'item_view_count_id' => 1,
			'item_sales_count_id' => 1,
			'started_date' => '2015-09-21 17:33:22',
			'end_date' => '2015-09-21 17:33:22',
			'reported_count' => 1,
			'created_date' => '2015-09-21 17:33:22',
			'updated_date' => '2015-09-21 17:33:22',
			'del_flg' => 1
		),
	);

}
