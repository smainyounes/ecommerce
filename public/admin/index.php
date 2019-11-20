<?php 
	
	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	try {
		$login = new view_login();

		$login->loadpage();

	} catch (Exception $e) {
		echo $e;
	}

 ?>