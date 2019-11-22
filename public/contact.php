<?php 

	$page = "Contact";

	// autoloader
	include '../backend/includes/autoloader.inc.php';

	//sending msg 
	if(isset($_POST['msg'])){
		$message = new controller_message();
		$msgres = $message->newmsg();
	}

	// header
	include '../backend/includes/header.inc.php';

	// starting the view
	try {

		$contact = new view_contact();
		if(isset($_POST['msg'])){
			$contact->loadpage($msgres);
		}else{
			$contact->loadpage();
		}

	} catch (Exception $e) {
		echo $e;
	}

	//footer
	include '../backend/includes/footer.inc.php';

 ?>