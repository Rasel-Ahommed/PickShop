<?php
require_once("../connection.php");

$usrId = $_REQUEST['id'];

$deleteQuery = "DELETE  FROM signup_info WHERE id = '$usrId'";
$runQuery = mysqli_query($conn,$deleteQuery);
if($runQuery==true){
	header("location:userInfo.php");
}
else{
	header("location:userInfo.php?delete=faild");
}



?>