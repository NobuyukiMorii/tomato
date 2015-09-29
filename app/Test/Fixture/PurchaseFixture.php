<?php
/**
 * Purchase Fixture
 */
class PurchaseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'purchase';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'purchase_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'seller_user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'buyer_user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'purchase_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'delivery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'compensate_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'purchase_id', 'unique' => 1)
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
			'purchase_id' => 1,
			'item_id' => 1,
			'seller_user_id' => 1,
			'buyer_user_id' => 1,
			'purchase_status_id' => 1,
			'delivery_id' => 1,
			'compensate_flg' => 1,
			'created_date' => '2015-09-22 07:41:42',
			'updated_date' => '2015-09-22 07:41:42',
			'del_flg' => 1
		),
	);

}
