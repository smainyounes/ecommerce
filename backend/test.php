<?php 
	
	include 'includes/autoloader.inc.php';

	try {
		$db = new controller_category();
		echo "works";
	} catch (Exception $e) {
		echo e;
	}

 ?>