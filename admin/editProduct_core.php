<?php

require_once("../connection.php");

	$PrdImg_name = $_FILES['PrdImg']['name'];
	$PrdImg_tmpname = $_FILES['PrdImg']['tmp_name'];
	$location = "../asset/Product_image/";
	$uniqName = uniqid().".jpg";

	$product_title = $_REQUEST['title'];
	$product_price = $_REQUEST['price'];
	$BDprice = $_REQUEST['BDprice'];
	$edittedId = $_REQUEST['edittedId'];


	move_uploaded_file($PrdImg_tmpname , $location."$uniqName");
	
	$upquery = "UPDATE product SET p_image='$uniqName' , p_title= '$product_title' , p_price= '$product_price', p_priceBD= '$BDprice' WHERE id=$edittedId ";
	$runQuery = mysqli_query($conn,$upquery);

	if($runQuery==true){
		header("location:manageProduct.php?addSuccess");
	}else{
		header("location:manageProduct.php?addfaild");
	}

