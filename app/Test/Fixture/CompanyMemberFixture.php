<?php
/**
 * CompanyMember Fixture
 */
class CompanyMemberFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'company_member';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'company_member_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'company_member_detail_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'company_member_detail_id' => 1,
			'photo_id' => 1,
			'created_date' => '2015-09-21 23:42:40',
			'updated_date' => '2015-09-21 23:42:40',
			'del_flg' => 1
		),
	);

}
