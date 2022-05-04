<?php
 include "config.php";
		
	  $sql = "select * from products where menuId = 1";
    $result = mysqli_query($conn,$sql);
    


    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();
        $temp['price'] = $row['Price'];
        $temp['image'] = $row['Image'];
        $temp['name'] = $row['Name'];
        $temp['id'] = $row['Id'];
        $temp['sell'] = $row['sell'];
        array_push($products,$temp);
    }
    echo json_encode($products);


?>