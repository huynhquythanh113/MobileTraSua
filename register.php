<?php
    require_once 'db_function.php';
    $db = new DB_Function();
    $response = array();
    if(isset($_Post['phone']) && isset($_Post['name']) && isset($_Post['birthdate'])&& isset($_Post['address']) ){
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        if($db->checkExistsUser($phone)){
            $response["exist"] = "User already exsted with" .$phone;
            echo json_encode($response);
        }
        else {
         $user = $db->registerNewUser($phone,$name,$birthdate,$address);
         if($user){
             $response["phone"] = $user["Phone"];
             $response["name"] = $user["Name"];
             $response["birthdate"] = $user["BirthDate"];
             $response["address"] = $user["Adress"];
             echo json_encode($response);
         }
         else {
            $response['error_msg'] = "Unknow error  occurred in registration!";
            echo json_encode($response);
         }
        }
    }
    else {
        $response['error_msg'] = "Required paramater (phone) is missing!";
        echo json_encode($response);
    }
?>