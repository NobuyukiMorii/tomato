<?php
/**
 * ItemSalesCount Fixture
 */
class ItemSalesCountFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'item_sales_count';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_sales_count_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			
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
			'item_sales_count_id' => 1,
			'count' => 1,
			'created_date' => '2015-09-21 17:41:53',
			'updated_date' => '2015-09-21 17:41:53',
			'del_flg' => 1
		),
	);

}
