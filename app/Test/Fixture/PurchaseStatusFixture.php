<?php
/**
 * PurchaseStatus Fixture
 */
class PurchaseStatusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'purchase_status';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'purchase_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'purchase_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'order_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'contract_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'payment_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'cancel_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'error_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'purchase_status_id', 'unique' => 1)
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
			'purchase_status_id' => 1,
			'purchase_id' => 1,
			'status' => 1,
			'order_date' => '2015-09-22 07:42:39',
			'contract_date' => '2015-09-22 07:42:39',
			'payment_date' => '2015-09-22 07:42:39',
			'cancel_date' => '2015-09-22 07:42:39',
			'error_date' => '2015-09-22 07:42:39',
			'created_date' => '2015-09-22 07:42:39',
			'updated_date' => '2015-09-22 07:42:39',
			'del_flg' => 1
		),
	);

}
