<?php
    require_once 'db_function.php';
    $db = new DB_Function();
    $response = array();
    if(isset($_Post['phone'])){
        $phone = $_POST['phone'];
        if($db->checkExistsUser($phone)){
            $response["exist"] = true;
            echo json_encode($response);
        }
        else {
            $response["exist"] = false;
            echo json_encode($response);
        }
    }
    else {
        $response['error_msg'] = "Required paramater (phone) is missing!";
        echo json_encode($response);
    }
?>