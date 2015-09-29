<?php
/**
 * Comment Fixture
 */
class CommentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'comment';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'comment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment_photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reported_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'comment_id', 'unique' => 1),
			'item_id' => array('column' => 'item_id', 'unique' => 0)
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
			'comment_id' => 1,
			'user_id' => 1,
			'item_id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'comment_photo_id' => 1,
			'reported_count' => 1,
			'created_date' => '2015-09-21 17:23:15',
			'updated_date' => '2015-09-21 17:23:15',
			'del_flg' => 1
		),
	);

}
