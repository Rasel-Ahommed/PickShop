<?php
require_once("connection.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$password = $_REQUEST['password'];

$selectData = "SELECT id FROM signup_info WHERE email ='$email' ";

$runQuery = mysqli_query($conn,$selectData);
$check = mysqli_num_rows($runQuery);

if($check===1){
	header("location:signUp.php?exist=true");
}else{
    $insartQuery = "INSERT INTO signup_info(user_name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
    $runQuery = mysqli_query($conn,$insartQuery);
    if($runQuery==true){
    	header("location:index.php?signUp=true");
    }else{
        header("location:signUp.php?signError=true");
    }
}




