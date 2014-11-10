<?php
	include('db.php');
	if (!$_GET['username']) {
		die('no username');
	}
	$results = query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
	if (count($results) < 1) {
		echo ("username not found");
	}

?>