<?php

	// connect to the database
	$conn = mysqli_connect('localhost', 'beny', 'Benyalex14', 'pizzas');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
