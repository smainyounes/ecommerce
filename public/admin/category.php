<?php 

	$page = "category";

	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	// header
	include '../../backend/includes/adminheader.inc.php';



	//starting the view

	try {
		$prodlist = new view_category();

		$prodlist->loadpage();

	} catch (Exception $e) {
		echo $e;
	}

	//footer
	include '../../backend/includes/adminfooter.inc.php';

 ?>