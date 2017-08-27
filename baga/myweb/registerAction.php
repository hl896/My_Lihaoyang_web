<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 13/07/2017
 * Time: 10:37 PM
 */



$servername="localhost";
$username="root";
$password="";
$dbname="yang_system";


$connection=mysqli_connect($servername,$username,$password);
if(!$connection){
    die("Database Connection Failed".mysqli_error($connection));

}else{
    echo"connect success.";
}
$select_db=mysqli_select_db($connection,$dbname);
if(!$select_db){
    die("Database Selection Failed".mysqli_error($connection));
}else{
    echo"Database select success.";
}


if(!empty($_POST['first_name'])||!empty($_POST['last_name'])||!empty($_POST['email'])||!empty($_POST['password'])||!empty('password_con')){
    if( isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password_con'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password_con=$_POST['password_con'];


        $register_query="INSERT INTO `Customer_table`(firstname,lastname,emailadd,password,password_com)VALUES ('$first_name','$last_name','$email','$password','$password_con')";

        $check_repeat_query="select * from Customer_table where emailadd ='$email'";
        $check_repeat_result=mysqli_query($connection,$check_repeat_query);
        $check_rows=mysqli_fetch_row($check_repeat_result);
        if($check_rows>0){
            echo "Already Registered! Waiting for jumping to register page...";
            header("Refresh:3;URL='register.php'");
        }
        else{
            $result=mysqli_query($connection,$register_query);

            if($result){
                $smsg="User Created Successfully. Waiting for jump to login page..............";
                echo "\n".$smsg."\n";
                header('Refresh:3; login.php');
            }
            else{
                $fmsg="User Registeration Failed";
                echo "\n".$fmsg."\n";
                header("Refresh:3;URL='register.php'");


            }
        }






    }
}




?>













