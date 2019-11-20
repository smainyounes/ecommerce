<?php 
	
	include 'includes/autoloader.inc.php';

	try {
		$db = new model_database();
		echo "works";
	} catch (Exception $e) {
		echo e;
	}

 ?>