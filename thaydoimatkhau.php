<?php
    include "config.php";

    if(isset($_POST['phone'])){
       $phone = $_POST['phone'];
        $pass = $_POST['pass'];
    


            $query = "UPDATE user SET  `password` = '".$pass."' WHERE phone = '".$phone."'"; 
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