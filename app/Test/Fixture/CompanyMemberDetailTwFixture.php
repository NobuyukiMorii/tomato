<?php
/**
 * CompanyMemberDetailTw Fixture
 */
class CompanyMemberDetailTwFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'company_member_detail_tw';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'company_member_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'company_member_id', 'unique' => 1)
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
			'company_member_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'created_date' => '2015-09-21 23:46:43',
			'updated_date' => '2015-09-21 23:46:43',
			'del_flg' => 1
		),
	);

}
