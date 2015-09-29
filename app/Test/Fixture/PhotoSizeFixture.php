<?php
/**
 * PhotoSize Fixture
 */
class PhotoSizeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'photo_size';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'photo_size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'width' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'height' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'photo_size_id', 'unique' => 1)
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
			'photo_size_id' => 1,
			'width' => 1,
			'height' => 1,
			'created_date' => '2015-09-22 07:40:34',
			'updated_date' => '2015-09-22 07:40:34',
			'del_flg' => 1
		),
	);

}
