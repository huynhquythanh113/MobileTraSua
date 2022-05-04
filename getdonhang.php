<?php
 include "config.php";
		

 if(isset($_POST['phone'])){
     $phone = $_POST['phone'];
	  $sql = "select * from bill where oPhone = '".$phone."'";
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
        $temp['status'] = $row['oStatus'];
        array_push($products,$temp);
    }
    echo json_encode($products);
 }

?>