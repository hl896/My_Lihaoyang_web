<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 19/08/2017
 * Time: 9:40 PM
 */

include 'config.inc.php';

if(isset($_POST['username'])&&isset($_POST['password'])){


    $result='';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql='Select *from Customer_table where emailadd=:username and password= :password';

    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':username',$username,PDO::PARAM_STR);

    $stmt->bindParam(':password',$password,PDO::PARAM_STR);

    $stmt->execute();





    if($stmt->rowCount()){
        $result="true";
    }
    elseif (!$stmt->rowCount()){
        $result="false";
    }

    echo $result;

}


?>