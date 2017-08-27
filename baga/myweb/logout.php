<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 14/07/2017
 * Time: 9:00 AM
 */


session_start();
if(session_destroy()){
    header("Location:login.php");

}
?>

