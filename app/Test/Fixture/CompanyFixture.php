<?php
/**
 * Company Fixture
 */
class CompanyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'company';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'company_detail_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'updated_data' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'del_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'company_id', 'unique' => 1)
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
			'company_id' => 1,
			'company_detail_id' => 1,
			'created_date' => 1,
			'updated_data' => 1,
			'del_flg' => 1
		),
	);

}
