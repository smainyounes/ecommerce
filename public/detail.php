<?php 

	$page = "Detail";

	// autoloader
	include '../backend/includes/autoloader.inc.php';

	// header
	include '../backend/includes/header.inc.php';

	// starting the view
	try {

		$home = new view_detail();

		$home->loadpage();

	} catch (Exception $e) {
		echo $e;
	}

	//footer
	include '../backend/includes/footer.inc.php';

 ?>