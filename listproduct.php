<?php
 include "config.php";
		
	  $sql = "select * from products where menuId =1 order by sell desc limit 1";
    $result = mysqli_query($conn,$sql);
    


    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();

        $temp['price'] = $row['Price'];
        $temp['image'] = $row['Image'];
        $temp['name'] = $row['Name'];
        $temp['id'] = $row['menuId'];
    
        array_push($products,$temp);
    }
    $sql1 = "select * from products where menuId =2 order by sell desc limit 1";
    $result1 = mysqli_query($conn,$sql1);

    while($row = mysqli_fetch_array($result1)){
        $temp = array();

        $temp['price'] = $row['Price'];
        $temp['image'] = $row['Image'];
        $temp['name'] = $row['Name'];
        $temp['id'] = $row['menuId'];
        
        array_push($products,$temp);
    }
    $sql2 = "select * from products where menuId =3 order by sell desc";
    $result2 = mysqli_query($conn,$sql2);

    while($row = mysqli_fetch_array($result2)){
        $temp = array();

        $temp['price'] = $row['Price'];
        $temp['image'] = $row['Image'];
        $temp['name'] = $row['Name'];
        $temp['id'] = $row['menuId'];
    
        array_push($products,$temp);
    }
    echo json_encode($products);

?>