<?php 
	
	include 'includes/autoloader.inc.php';

	try {

		echo "first test from home view <br>";

		$test = new view_home();

		$test->loadpage();

	} catch (Exception $e) {
		echo $e;
	}


echo "<hr>";

	try {
		echo "test from detail view <br>";
		$test = new view_detail();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}

echo "<hr>";

	try {
		echo "test from contact view <br>";
		$test = new view_contact();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from productlist view <br>";
		$test = new view_prodlist();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from addprod view <br>";
		$test = new view_addprod();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from category view <br>";
		$test = new view_category();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from message view <br>";
		$test = new view_message();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from settings view <br>";
		$test = new view_settings();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

	try {
		echo "test from login view <br>";
		$test = new view_login();
		$test->loadpage();
	} catch (Exception $e) {
		echo $e;
	}
echo "<hr>";

 ?>