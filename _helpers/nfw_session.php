<?php


	use Josantonius\Session\Session;

	$ses = new Session();

	if($ses::init()){
		
		$ses::init();
	}   
	
	$ses::setPrefix('_skripsuit');