<?php

	include "config.php";


	$name = $_GET['name'];
	$address = $_GET['address'];
	$pass = $_GET['pass'];
	$phone = $_GET['phone']

	$query = "insert into user(Phone,Name,Password,Address) values('$phone','$name','$pass','$address')";
	mysqli_query($conn,$query);



?>