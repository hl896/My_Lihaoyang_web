<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 14/07/2017
 * Time: 9:28 PM
 */

session_start();
$login_session_obtain=$_SESSION['login_name'];
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

if(isset($_POST['submits'])){
    if(empty($_POST['comments_contents'])){
        echo 'empty';
    }else{
        $comments=$_POST['comments_contents'];
        $email=$login_session_obtain;

        $comments=stripslashes($comments);
        $email=stripslashes($email);

        $comments=mysqli_escape_string($connection,$comments);
        $email=mysqli_escape_string($connection,$email);

        $insert_comments="INSERT INTO `comment_table`(emailadd,comment_Content)VALUES ('$email','$comments')";
        $comments_query=mysqli_query($connection, $insert_comments);

        if($comments_query){
            echo "comment success";
            header("refresh:3;url=single.php");
            session_reset();
        }else{
            echo "comment failed";
            session_reset();
        }


    }

}





?>

