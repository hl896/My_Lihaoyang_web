<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 03/08/2017
 * Time: 2:20 PM
 */

require_once 'include/user.php';

$username = "";

$password = "";

$email = "";

if(isset($_POST['firstname'])){

    $usernameF = $_POST['firstname'];

}

if(isset($_POST['lastname'])){
    $usernameL = $_POST['lastname'];
}


if(isset($_POST['password'])){
    $password = $_POST['password'];
}

if(isset($_POST['password_com'])){
    $password_com = $_POST['password_com'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}

// Instance of a User class

$userObject = new User();

// Registration of new user

if(!empty($usernameF) && !empty($usernameL) && !empty($password) && !empty($password_com) && !empty($email)){

    $hashed_password = md5($password);
    $hashed_password_com=md5($password_com);


    $json_registration = $userObject->createNewRegisterUser($usernameF,$usernameL, $hashed_password,$hashed_password_com, $email);


    echo json_encode($json_registration);

}

// User Login

if( !empty($password) && !empty($email)){

    //$hashed_password = md5($password);

    $json_array = $userObject->loginUsers($email, $password);

    echo json_encode($json_array);

}





?>