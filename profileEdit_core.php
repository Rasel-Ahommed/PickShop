<?php
require_once("connection.php");

$profile_name = $_FILES['profile']['name'];
$profile_tmpname = $_FILES['profile']['tmp_name'];
$location = "asset/Profile_Picturs/";
$uniqName = uniqid().".jpg";

move_uploaded_file($profile_tmpname , $location."$uniqName");


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$password = $_REQUEST['password'];
$edittedId = $_REQUEST['edittedId'];

$upquery = "UPDATE signup_info SET user_name='$name' , email='$email' , phone= '$phone' , password='$password',profile='asset/Profile_Picturs/$uniqName' WHERE id=$edittedId ";

$runQuery = mysqli_query($conn,$upquery);

if($runQuery==true){
	header("location:home.php");
	setcookie("email",$email,time()+(86400*7));
}



?>