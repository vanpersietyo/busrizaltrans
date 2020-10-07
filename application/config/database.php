<?php defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn' 		=> '',
	'hostname' 	=> getenv('DB_HOST' ) ?: 'localhost',
	'username' 	=> getenv('DB_USER') ?: 'root',
	'password' 	=> getenv('DB_PASS')?: '88888888',
	'database' 	=> getenv('DB_NAME')?: 'busrizal',
	'port' 		=> getenv('DB_PORT')?: '3306',
	'dbdriver' 	=> getenv('DB_DRIVER')?: 'mysqli',
	'db_debug' 	=> getenv('DB_DEBUG')?: false,
	'dbprefix' 	=> '',
	'pconnect' 	=> FALSE,
	'cache_on' 	=> FALSE,
	'cachedir' 	=> '',
	'char_set' 	=> 'utf8',
	'dbcollat' 	=> 'utf8_general_ci',
	'swap_pre' 	=> '',
	'encrypt' 	=> FALSE,
	'compress' 	=> FALSE,
	'stricton' 	=> FALSE,
	'failover' 	=> array(),
	'save_queries' => TRUE
);
