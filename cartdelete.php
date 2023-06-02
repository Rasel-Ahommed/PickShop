<?php
require_once("connection.php");

$usrId = $_REQUEST['id'];

$deleteQuery = "DELETE  FROM add_to_cart WHERE id = '$usrId'";
$runQuery = mysqli_query($conn,$deleteQuery);
if($runQuery==true){
	header("location:AddToCart_core.php");
}
else{
	echo "not ok";
}



?>