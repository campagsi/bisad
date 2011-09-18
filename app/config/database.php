<?php
class DATABASE_CONFIG {

	//conexão local
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'indicadores',
		'prefix' => '',
	);
	
	//conexão srv
	/*var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'decisaoo_adh',
		'password' => 'adh123',
		'database' => 'decisaoo_indicadores',
	);*/
}
