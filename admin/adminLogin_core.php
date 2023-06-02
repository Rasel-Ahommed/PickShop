<?php
require_once("../connection.php");

$admin_user = $_REQUEST['admin_user'];
$admin_pwd = $_REQUEST['admin_pwd'];

$selectData = "SELECT * FROM admin_info WHERE admin_user='$admin_user' AND admin_pwd ='$admin_pwd' ";
$runQuery = mysqli_query($conn,$selectData);
$check = mysqli_num_rows($runQuery);

if($check===1){
	header("location:adminDashboard.php");
	setcookie("admin_user",$admin_user,time()+(86400*7));
}
else{
	header("location:admin.php?login=faild");
}