<?php
/**
 * CompanyMemberDetailEn Fixture
 */
class CompanyMemberDetailEnFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'company_member_detail_en';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'company_member_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'updated_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 1,
			'description' => 1,
			'created_date' => 1,
			'updated_date' => 1,
			'del_flg' => 1
		),
	);

}
