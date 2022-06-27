<?php
$con = mysqli_connect("localhost", "root", "", "e-com");

if(isset($_POST["email_check"])){
    $email=$_POST["email_check"];
    $sql="select * from user where email='".$email."'";
    $result=mysqli_query($con,$sql);
    echo mysqli_num_rows($result);
}


if(isset($_POST["mobile_check"])){
    $mobile=$_POST["mobile_check"];
    $sql="select * from user where mobile='".$mobile."'";
    $result=mysqli_query($con,$sql);
    echo mysqli_num_rows($result);
}

?>