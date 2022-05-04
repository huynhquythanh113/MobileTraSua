<?php
  include "config.php";
    $sql = "select * from topping";
    $result = mysqli_query($conn,$sql);
    


    $products =  array();

    while($row = mysqli_fetch_array($result)){  
        $temp = array();

        $temp['price'] = $row['Price'];
        $temp['name'] = $row['Name'];

    
        array_push($products,$temp);
    }
    echo json_encode($products);


?>