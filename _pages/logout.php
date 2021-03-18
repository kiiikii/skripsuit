<?php 
	$setTemplate = false;
	$ses->destroy('_skripsuit', true);
	redirect(url('login'));
?>