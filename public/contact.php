<?php 

	$page = "Contact";

	// autoloader
	include '../backend/includes/autoloader.inc.php';

	// header
	include '../backend/includes/header.inc.php';

	// starting the view
	try {

		$contact = new view_contact();

		$contact->loadpage();

	} catch (Exception $e) {
		echo $e;
	}

	//footer
	include '../backend/includes/footer.inc.php';

 ?>