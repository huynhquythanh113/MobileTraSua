<?php
 include "config.php";
		
	  $sql = "select * from bill";
    $result = mysqli_query($conn,$sql);
    


    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();

        $temp['id'] = $row['idbill'];
        $temp['phone'] = $row['oPhone'];
        $temp['name'] = $row['oName'];
        $temp['address'] = $row['oAddress'];
        $temp['detail'] = $row['oDetail'];
        $temp['cmt'] = $row['oCmt'];
        $temp['tongtien'] = $row['oTongtien'];
        $temp['date'] = $row['oDate'];
        array_push($products,$temp);
    }
    echo json_encode($products);


?>