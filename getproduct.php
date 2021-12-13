<?php
    	define("DB_HOST","localhost");

		define("DB_USER","id18092231_nksg");
		define("DB_PASSWORD","Thanh@0909834037");
		define("DB_DATABASE","id18092231_data_insert");
		$conn=  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    //if(isset($_POST['menuid'])){
    //$menuid = $_POST['menuid'];
    
    //$sql = "select * from products where menuId ='".$menuid."'";
    $sql = "select * from products where menuId =1";
    $result = mysqli_query($conn,$sql);
    $products =  array();

    while($row = mysqli_fetch_array($result)){
        $temp = array();

        $temp['name'] = $row['Name'];
        $temp['image'] = $row['Price'];
        $temp['name'] = $row['Image'];

    
        array_push($products,$temp);
    }
    echo json_encode($products);
  //  }

?>