<?php
require_once("connection.php");
$id = $_REQUEST['id'];

$selectData = "SELECT * FROM product WHERE id = $id ";
$runQuery = mysqli_query($conn,$selectData);
if($runQuery==true){
	while($myData=mysqli_fetch_array($runQuery)){
		$img = $myData["p_image"];
		$title = $myData["p_title"];
		$price = $myData["p_price"];
}
}

	$insartQuery = "INSERT INTO add_to_cart(img,pdtTitle,pdtPrice) VALUES('$img','$title','$price')";
	$runQuery= mysqli_query($conn,$insartQuery);
	if($insartQuery==true){
		header("location:add_to_card.php");
	}else{
		echo "Add to cart faild!";
	}





