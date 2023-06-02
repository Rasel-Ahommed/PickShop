<?php

require_once("../connection.php");

$a_user = $_REQUEST['a_user'];
$a_pwq = $_REQUEST['a_pwq'];

$upquery = "UPDATE admin_info SET admin_user='$a_user', admin_pwd='$a_pwq'";
$runQuery= mysqli_query($conn,$upquery);
if($runQuery==true){
	header("location:adminDashboard.php");
}else{
	header("location:updateAdmin.php?notUpdate");
}