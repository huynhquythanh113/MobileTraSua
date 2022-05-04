<?php
    include "config.php";

    $phone = $_POST['phone'];
	$query = "select * from user where Phone = '".$phone."' ";
     $result =	mysqli_query($conn,$query);
     $row = mysqli_num_rows($result);
        if($row>0){
            echo "Succesfully";
        }
        else {
            echo "Failed";
        }
?>