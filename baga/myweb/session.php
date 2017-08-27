<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 11/07/2017
 * Time: 11:45 PM
 */


/**
 * Created by PhpStorm.
 * User: yanl
 * Date: 5/1/2017
 * Time: 2:26 PM
 */


$connection=mysqli_connect("localhost","root","");

$db=mysqli_select_db($connection,"yang_system");
session_start();
$user_check=$_SESSION['login_customer_user'];
$ses_sql=mysqli_query($connection,"select emailadd from Customer_table WHERE emailadd='$user_check'");
$rows=mysqli_fetch_assoc($ses_sql);

$login_session=$rows['emailadd'];


if(!isset($login_session)){
    mysqli_close($connection);
    header('Location:login.php');

}

?>