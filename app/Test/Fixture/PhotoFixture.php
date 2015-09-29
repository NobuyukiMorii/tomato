<?php
/**
 * Photo Fixture
 */
class PhotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'photo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'photo_size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'folder_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_data' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'photo_id', 'unique' => 1)
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
			'photo_id' => 1,
			'photo_size_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'folder_name' => 'Lorem ipsum dolor sit amet',
			'created_date' => '2015-09-21 23:49:43',
			'updated_data' => '2015-09-21 23:49:43',
			'del_flg' => 1
		),
	);

}
