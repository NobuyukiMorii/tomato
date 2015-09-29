<?php
/**
 * Shop Fixture
 */
class ShopFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'shop';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'shop_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'shop_detail_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'shop_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'start_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'shop_id', 'unique' => 1)
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
			'shop_id' => 1,
			'shop_detail_id' => 1,
			'shop_type_id' => 1,
			'country_id' => 1,
			'photo_id' => 1,
			'start_date' => '2015-09-22 07:48:48',
			'end_date' => '2015-09-22 07:48:48',
			'created_date' => '2015-09-22 07:48:48',
			'updated_date' => '2015-09-22 07:48:48',
			'del_flg' => 1
		),
	);

}
