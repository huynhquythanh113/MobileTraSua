<?php
		include "config.php";
	if(isset($_POST['phone'])){
		$name = $_POST['name'];
	$address = $_POST['address'];
	$pass = $_POST['pass'];
	$phone =$_POST['phone'];
	$query = "INSERT INTO `user` (`iduser`, `name`, `avatarUrl`, `password`, `address`, `phone`) VALUES (NULL, '".$name."', '', '".$pass."', '".$address."', '".$phone."')";
	$query1 = "select * from user where phone = '".$phone."' ";
	$result =	mysqli_query($conn,$query1);
	$row = mysqli_num_rows($result);
	   if($row<1){
		if(mysqli_query($conn,$query)){
			echo 'Succesfully';
		}
		else {
			echo "failed";
		}
	}
	   
	   else {
		   echo "Failed";
	   }
	
	}
	else {
	   echo "not find phone";
	}
?>