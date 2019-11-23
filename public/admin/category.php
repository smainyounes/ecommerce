<?php 

	$page = "category";

	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	// header
	include '../../backend/includes/adminheader.inc.php';

	session_start();

	//cheking if admin logged in
	if (isset($_SESSION['user'])) {
		if (isset($_POST['newcateg'])) {
			// new catgeroy added
			$categ = new controller_category();
			$test = $categ->addnew($_POST['categ_name']);

			try {
				$prodlist = new view_category();
				$prodlist->loadpage($test);
			} catch (Exception $e) {
				echo $e;
			}
		}else{
			//starting the view
			try {
				$prodlist = new view_category();

				$prodlist->loadpage();

			} catch (Exception $e) {
				echo $e;
			}
		}
		

		//footer
		include '../../backend/includes/adminfooter.inc.php';

	}else{
		// not logged in
		header("Location: index.php");
	}

	

	

 ?>