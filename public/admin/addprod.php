<?php 

	$page = "addprod";

	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	// header
	include '../../backend/includes/adminheader.inc.php';

	session_start();

	// checking if logged in
	if (isset($_SESSION['user'])) {
		// checking insertion
		if (isset($_POST['addnew'])) {
			$prod = new controller_product();
			$test = $prod->insert();
			if($test){
				header("Location: prodlist.php?msg=done");
			}else{
				header("Location: prodlist.php?msg=error");
			}
		}

	}else{
		header("Location: index.php");
	}


	//starting regular view

	try {
		$prodlist = new view_addprod();

		$prodlist->loadpage();

	} catch (Exception $e) {
		echo $e;
	}

	//footer
	include '../../backend/includes/adminfooter.inc.php';

 ?>