<?php

	$host='localhost';
	$user='root';
	$pass='';
	$database='wantiknas';

	$connect=mysqli_connect($host, $user, $pass, $database);

	mysqli_select_db($connect, $database);

?>