<?php
/**
 * UserWishItem Fixture
 */
class UserWishItemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_wish_item';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_wish_list_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'item_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'item_url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shop_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shop_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'updated_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_wish_list_id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'user_wish_list_id' => 1,
			'user_id' => 1,
			'item_name' => 'Lorem ipsum dolor sit amet',
			'item_url' => 'Lorem ipsum dolor sit amet',
			'shop_name' => 'Lorem ipsum dolor sit amet',
			'shop_address' => 'Lorem ipsum dolor sit amet',
			'created_date' => 1,
			'updated_date' => 1,
			'del_flg' => 1
		),
	);

}
