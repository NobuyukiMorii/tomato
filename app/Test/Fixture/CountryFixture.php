<?php
/**
 * Country Fixture
 */
class CountryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'country';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_code' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'country_id', 'unique' => 1)
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
			'country_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'country_code' => 1,
			'created_date' => '2015-09-21 17:51:30',
			'updated_date' => '2015-09-21 17:51:30',
			'del_flg' => 1
		),
	);

}
