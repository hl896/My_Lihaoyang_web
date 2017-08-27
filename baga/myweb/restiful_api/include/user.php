<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 03/08/2017
 * Time: 2:03 PM
 */

include_once 'db.php';

class User{

    private $db;

    private $db_table = "Customer_table";

    public function __construct(){
        $this->db = new DbConnect();
    }

    public function isLoginExist($email, $password){

        $query = "select * from " . $this->db_table . " where emailadd = '$email' AND password = '$password' Limit 1";

        $result = mysqli_query($this->db->getDb(), $query);

        if(mysqli_num_rows($result) > 0){

            mysqli_close($this->db->getDb());

            return true;

        }

        mysqli_close($this->db->getDb());

        return false;

    }

    public function createNewRegisterUser($firstname,$lastname, $password,$password_com, $email){

        $query = "insert into Customer_table (Firstname, Lastname, emailadd, password, password_com) values ('$firstname', '$lastname','$email','$password', '$password_com')";

        $inserted = mysqli_query($this->db->getDb(), $query);

        if($inserted == 1){

            $json['success'] = 1;

        }else{

            $json['success'] = 0;

        }

        mysqli_close($this->db->getDb());

        return $json;

    }

    public function loginUsers($email, $password){

        $json = array();

        $canUserLogin = $this->isLoginExist($email, $password);

        if($canUserLogin){

            $json['success'] = 1;

        }else{
            $json['success'] = 0;
        }
        return $json;
    }
}
