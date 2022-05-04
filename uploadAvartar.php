<?php
    include "config.php";

    if(isset($_FILES["uploaded_file"]["name"])){
            if(isset($_POST['phone']))
            {
                    $phone = $_POST['phone'];
                    $name = $_FILES["uploaded_file"]["name"];
                    $tmp_name = $_FILES["uploaded_file"]["tmp_name"];
                    $error = $_FILES["uploaded_file"]["error"];

                    if(!empty($name)){
                        $location = './user_avatar/';
                        if(!is_dir($location))
                            mkdir($location);
                        if(move_uploaded_file($tmp_name,$location.$name)){
                            $query = " UPDATE user SET avatarUrl = '$name' WHERE phone = '$phone'";
                            if( $result =	mysqli_query($conn,$query)){
                                echo json_encode("Succesfully!");
                            }
                            else {
                                echo json_encode("Something wrongs!");
                            }
                        }
                    }
            }
            else {
                echo json_encode("Not found phone");
            }
    }
    else {
        echo json_encode("Please choose file");
    }


?>