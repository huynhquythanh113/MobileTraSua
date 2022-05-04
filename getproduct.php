<?php
    include "config.php";
    if(isset($_POST['menuid'])){
    $menuid = $_POST['menuid'];

    $sql = "select * from products where menuId ='".$menuid."' order by sell desc ";
   
    $result = mysqli_query($conn,$sql);
    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();

        $temp['name'] = $row['Name'];
        $temp['image'] = $row['Image'];
        $temp['price'] = $row['Price'];
        $temp['sell'] = $row['sell'];
        $temp['id'] = $row['Id'];
        array_push($products,$temp);
    }
    echo json_encode($products);
   }

?>