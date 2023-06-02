<?php
require_once("../connection.php");

$usrId = $_REQUEST['id'];

$deleteQuery = "DELETE  FROM product WHERE id = '$usrId'";
$runQuery = mysqli_query($conn,$deleteQuery);
if($runQuery==true){
	header("location:manageProduct.php");
}
else{
	header("location:manageProduct.php?delete=faild");
}



?>