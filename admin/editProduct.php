<?php
if(!$_COOKIE['admin_user']){
	header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PickShop</title>
    <link rel="icon" href="../asset/logo/favicon.png">
    <link rel="stylesheet" href="../style.css">

</head>
<body>

	<!-- Add product -->
	
	<section class="addProduct" style="background:#f0f1f2; padding: 54px 0 40px 0px;">
		<div class="addProduct">
			<div class="addArea">
				<h1>Update Product</h1>
				<?php
		        		require_once("../connection.php");
		        		$editId = $_REQUEST['id'];

		        		$selectQuery = "SELECT * FROM product WHERE id = '$editId' ";
		        		$runQuery = mysqli_query($conn,$selectQuery);
		        		if($runQuery==true){
		        			while($myData=mysqli_fetch_array($runQuery)){?>
				<form enctype="multipart/form-data" action="editProduct_core.php" method="post">
					<span style="font-weight: bold;">Product image : </span>
					<input type="file" name="PrdImg" required><br><br>

					<label for="title">Product Title</label><br>
					<input type="text" class="p_title" name="title" autocomplete="off" required value="<?php echo $myData['p_title']; ?>"></input> <br>

					<label for="price">Product Price</label><br>
					<input type="number" name="price" autocomplete="off" required value="<?php echo $myData['p_price']; ?>"><br>

					<label for="BDprice">Product Price With discount </label><br>
					<input type="number" name="BDprice" autocomplete="off"  value="<?php echo $myData['p_priceBD']; ?>"><br>
					<input type="hidden" name="edittedId" value="<?php echo $editId; ?>">

					<input type="submit" value="Update" name="submit" class="AdminSubmit" style="padding: 18px 22px;float: right;" onclick="return confirm('Update')"><br>

				<?php  }} ?>
				</form>
				<a href="manageProduct.php" onclick="return confirm('Cancle')"><button class="AdminSubmit" style="padding: 18px 22px;float: right;margin: -19px 8px;margin-bottom: 16px;">Cancle</button></a>
			</div>
		</div>
	</section>
</body>