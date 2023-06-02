<?php

require_once("../connection.php");

$userId = $_REQUEST['id'];
$status = 1;


$selectData = "SELECT status FROM signup_info WHERE id = '$userId ' ";
$runQuery = mysqli_query($conn,$selectData);
if($runQuery==true){
	while($myData=mysqli_fetch_array($runQuery)){

		if($myData['status'] < $status){
		 	$changeStatus = 1;
		}else{
			$changeStatus = 0;
		}
	}$changeStatus;

	$upquery = "UPDATE signup_info SET status='$changeStatus' WHERE id=$userId";
	$runQuery = mysqli_query($conn,$upquery);
	if($runQuery==true){
		header("location:userinfo.php?update=$changeStatus");
	}
}
