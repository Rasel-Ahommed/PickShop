<?php
require_once("connection.php");
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$selectData = "SELECT id FROM signup_info WHERE email='$email' AND password='$password' ";
$runQuery = mysqli_query($conn,$selectData);
$check = mysqli_num_rows($runQuery);

if($check==1){
	$selectData = "SELECT status FROM signup_info WHERE email = '$email ' ";
 	$runQuery = mysqli_query($conn,$selectData);
	while($myData=mysqli_fetch_array($runQuery)){
		 $getStatus = $myData['status'];
	 }echo $getStatus;
	 if($getStatus==1){
	 	header("location:home.php?");
	 	setcookie("email",$email,time()+(86400*7));
	 }else{
	 	header("location:index.php?blocked=true");
	 }
}else{
	 header("location:index.php?login=faild");
}





