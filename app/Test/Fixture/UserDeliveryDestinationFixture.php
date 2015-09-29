<?php
/**
 * UserDeliveryDestination Fixture
 */
class UserDeliveryDestinationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_delivery_destination';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_delivery_destination_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'family_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_code' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'zipcode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel_numbe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primary_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_delivery_destination_id', 'unique' => 1)
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
			'user_delivery_destination_id' => 1,
			'user_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'family_name' => 'Lorem ipsum dolor sit amet',
			'country_code' => 1,
			'zipcode' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'tel_numbe' => 'Lorem ipsum dolor sit amet',
			'primary_flg' => 1,
			'created_date' => '2015-09-22 08:01:54',
			'updated_date' => '2015-09-22 08:01:54',
			'del_flg' => 1
		),
	);

}
