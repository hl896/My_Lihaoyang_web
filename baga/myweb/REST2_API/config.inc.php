<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 19/08/2017
 * Time: 10:10 PM
 */


$servername="localhost";
$username="root";
$password="";

$dbname="yang_system";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    die("OOPs something went wrong");
}
?>