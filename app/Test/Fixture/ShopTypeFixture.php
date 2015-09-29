<?php
/**
 * ShopType Fixture
 */
class ShopTypeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'shop_type';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'shop_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'shop_type_id', 'unique' => 1)
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
			'shop_type_id' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'created_date' => '2015-09-22 07:55:12',
			'updated_date' => '2015-09-22 07:55:12',
			'del_flg' => 1
		),
	);

}
