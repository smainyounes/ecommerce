<?php 
	
	// autoloader
	include '../../backend/includes/autoloader.inc.php';

	//starting session
	session_start();

	// checking if user logged in
	if (isset($_SESSION['user'])) {
		header("Location: addprod.php");
	}

	// checking if login form is sent
	if (isset($_POST['login'])) {
		$user = new controller_user();
		$res = $user->login();
		if ($res) {
			// infos correct
			$_SESSION['user'] = 1;
			header("Location: addprod.php");
		}else{
			//loading the page with error login
			try {

				$login = new view_login();

				$login->loadpage(1);

			} catch (Exception $e) {
				echo $e;
			}
		}
	}else{
		//loading the page
		try {

			$login = new view_login();

			$login->loadpage();

		} catch (Exception $e) {
			echo $e;
		}
	}




 ?>