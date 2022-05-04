<?php
    class DB_Function{
        private $conn;

        function _construct()
        {
            require_once 'db_connect.php';
            $db = new DB_connect();
            $this->$conn = $db->connect();

        }
        function _destruct(){

        }
        function checkExistsUser($phone){
            $stmt = $this->conn->prepare("Select * from user where Phone =?");
            $stmt -> bind_param("s",$phone);
            $stmt->excute();
            $stmt -> store_result();
            if($stmt->num_rows>0){
                $stmt->close();
                return true;
            }
            else {
                $stmt ->close();
                return false;
            }
        }
        public function registerNewUser($phone,$name,$birthdate,$address){
            $stmt = $this->conn->prepare("Insert into user(Phone,Name,BirthDate,Address) Values(?,?,?,?)");
            $stmt -> bind_param("ssss",$phone,$name,$birthdate,$address);
            $result = $stmt->excute() ;
            $stmt -> close();
            if($result){
                $stmt = $this->conn->prepare("Select * from user where Phone =?");
                $stmt -> bind_param("s",$phone);
                $stmt->excute();
                $user = $stmt->get_result()->fetch_assoc();
                $stmt->close();
                return $user;
            }
            else {
                return false;
            }
        }
    }
?>