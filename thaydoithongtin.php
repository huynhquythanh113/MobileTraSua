<?php
    include "config.php";

    if(isset($_POST['phone'])){
       $phone = $_POST['phone'];
        $name = $_POST['name'];
       $add = $_POST['add'];


            $query = "UPDATE user SET `name` = '".$name."', `address` = '".$add."' WHERE phone = '".$phone."'"; 
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