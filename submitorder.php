<?php
    include "config.php";

    if(isset($_POST['oPhone'])){
       $phone = $_POST['oPhone'];
        $name = $_POST['oName'];
        $add = $_POST['oAddress'];
        $order = $_POST['oDetail'];
        $cmt = $_POST['oCmt'];
        $tongtien = $_POST['oTongtien'];
        $date = $_POST['odate'];
       $status = "Chua xac nhan";


            $query = "INSERT INTO bill (idbill, oPhone, oName, oAddress, oDetail, oCmt, oTongtien,oDate,oStatus) VALUES (NULL, '".$phone."', '".$name."', '".$add."', '".$order."', '".$cmt."', '".$tongtien."','".$date."','".$status."');"; 
             $result =	mysqli_query($conn,$query);
                if($result){
                    echo "Succesfully";
                }
                else {
                    echo "Failed";
                }
             }
    else {
        echo "Not find phone";
    }
   
?>