<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$session_sql=mysqli_query($db,"select name from user where email='$user_check'");
$row=mysqli_fetch_array($session_sql,MYSQLI_ASSOC);
$login_session=$row['name'];

if(!isset($_SESSION["login_user"])){
    header("location:index.php");
    die();
}
?>