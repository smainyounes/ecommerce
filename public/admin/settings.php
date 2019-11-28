<?php 

	$page = "settings";

	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	// header
	include '../../backend/includes/adminheader.inc.php';

	//check if loggedin
	session_start();
	if (isset($_SESSION['user'])) {

		$test;
		//change username
		if (isset($_POST['changename'])) {
			$user = new controller_user();
			$test = $user->changeusername();

			try {
				$settings = new view_settings();

				$settings->loadpage($test);

			} catch (Exception $e) {
				echo $e;
			}
		}

		//change password
		if (isset($_POST['changepass'])) {
			$user = new controller_user();
			$test = $user->changepassword();

			try {
				$settings = new view_settings();

				$settings->loadpage($test);

			} catch (Exception $e) {
				echo $e;
			}
		}

		if (isset($_POST['changeinfos'])) {
			$user = new controller_user();
			$test = $user->changeinfos();

			try {
				$settings = new view_settings();

				$settings->loadpage($test);

			} catch (Exception $e) {
				echo $e;
			}
		}
		//loading default view
		if (!isset($test)) {
			try {
				$settings = new view_settings();

				$settings->loadpage();

			} catch (Exception $e) {
				echo $e;
			}
		}
		
	}else{
		header("Location: index.php");
	}

	

	//footer
	include '../../backend/includes/adminfooter.inc.php';

 ?>