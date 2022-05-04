<?php
 include "config.php";
		
 if(isset($_POST['phone'])){

    $phone = $_POST['phone'];

	  $sql = "select * from user where phone ='".$phone."' LIMIT 1 ";
    $result = mysqli_query($conn,$sql);
    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();

        $temp['address'] = $row['address'];
        $temp['image'] = $row['avatarUrl'];
        $temp['name'] = $row['name'];
        $temp['password'] = $row['password'];
    
        array_push($products,$temp);
    }
    echo json_encode($products);
}


?>