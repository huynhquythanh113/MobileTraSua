<?php
    include "config.php";
   if(isset($_POST['menuid'])){
    $menuid = $_POST['menuid'];
    $contcart = $_POST['count'];
    
    $sql = "select * from products where Id ='".$menuid."' ";
   
    $result = mysqli_query($conn,$sql);
  
    
    while($row = mysqli_fetch_array($result)){
      $dem = $row['sell'];
      $tong =$dem+$contcart;
      $sql1 = "update products set sell ='".$tong."' where Id ='".$menuid."' ";
       
     if(mysqli_query($conn,$sql1)){
         echo $contcart;
     }
    
    }
       
   }

?>