<?php 
	
	include 'includes/autoloader.inc.php';

	try {
		$test = new view_home();

		$test->loadpage();

	} catch (Exception $e) {
		echo e;
	}

 ?>