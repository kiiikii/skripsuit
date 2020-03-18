<?php 
	
	defined('env') OR exit('Akses langsung script ini diblokir');

	$setdb['db_host'] = '127.0.0.1';
	$setdb['db_name'] = 'etpu';
	$setdb['db_user'] = 'root';
	$setdb['db_password'] = '';

	# folder untuk template
	$template = 'templates/AdminLTE-master/';

	# session
	$setsession['prefix'] = 'skripsuit';

	# URI
	$seturi['base'] = 'http://localhost/skripsuit/';
	$seturi['assets'] = 'assets/';