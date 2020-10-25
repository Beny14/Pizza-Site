<?php

	// connect to the database
	$conn = mysqli_connect('localhost', '', '', '');
	// check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

?>
