<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		//If we use 'localhost' in MAMP, database error happens.
		'host' => '127.0.0.1',
		'port' => 8889,
		'login' => 'root',
		'password' => 'root',
		'database' => 'jp_items',
		'encoding' => 'utf8'
	);
		
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		//If we use 'localhost' in MAMP, database error happens.
		'host' => '127.0.0.1',
		'port' => 8889,
		'login' => 'root',
		'password' => 'root',
		'database' => 'test_jp_items',
		'encoding' => 'utf8'
	);

}
