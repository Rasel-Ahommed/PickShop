<?php
require_once("../connection.php");

$PrdImg_name = $_FILES['PrdImg']['name'];
$PrdImg_tmpname = $_FILES['PrdImg']['tmp_name'];
$location = "../asset/Product_image/";
$uniqName = uniqid().".jpg";

$product_title = $_REQUEST['title'];
$product_price = $_REQUEST['price'];
$BDprice = $_REQUEST['BDprice'];

$insartQuery = "INSERT INTO product(p_image,p_title,p_price,p_priceBD) VALUES('$uniqName','$product_title','$product_price','$BDprice')";

$runQuery = mysqli_query($conn,$insartQuery);
if($runQuery==true){
	header("location:addProduct.php?addSuccess=true");
	move_uploaded_file($PrdImg_tmpname , $location."$uniqName");
}else{
	header("location:addProduct.php?addFaild=true");
}
?>