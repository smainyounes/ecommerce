<?php 

	$page = "prodlist";

	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	// header
	include '../../backend/includes/adminheader.inc.php';
 	
 	session_start(); 

	//checking if admin loggedin
	if (isset($_SESSION['user'])) {
		//starting the view

		try {
			$prodlist = new view_prodlist();

			$prodlist->loadpage();

		} catch (Exception $e) {
			echo $e;
		}

		//footer
		include '../../backend/includes/adminfooter.inc.php';
	}else{
		// echo "doesnt exist";
		header("Location: index.php");
	}

	

 ?>