<?php
require_once("connection.php");

$id = $_REQUEST["id"];

$deleteQuery = "DELETE  FROM add_to_cart WHERE id = '$id'";
$runQuery = mysqli_query($conn,$deleteQuery);
if($runQuery==true){
	header("location:add_to_card.php?deleted");
}
else{
	echo "Faild !!!!!!!!!!";
}
