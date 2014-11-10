<?php


function query($myQuery) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "planter";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	// select database
	mysqli_select_db($conn, $database) or die('<p class="error">Unable to connect to the database at this time.</p>');

	$results = mysqli_query($conn, $myQuery);

	$rows = array();

	while($user = mysqli_fetch_array($results, MYSQLI_ASSOC)){
		array_push($rows, $user);
	}

	return $rows;

}

?>