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
				<h1>Update Admin Info</h1>

				<?php

					if(isset($_REQUEST['notUpdate'])){
						if(isset($_REQUEST['notUpdate'])){
							echo "<h4 style='color:red;text-align:center;font-size:18px'>Update Failed !</h4>";
						}
					}

				?>


				<?php
		        	require_once("../connection.php");
		     
		        	$selectQuery = "SELECT * FROM admin_info";
		        	$runQuery = mysqli_query($conn,$selectQuery);
		        	if($runQuery==true){
		        		while($myData=mysqli_fetch_array($runQuery)){?>

				<form action="updateAdmin_core.php" method="post">

					<label for="a_user">Admin User name</label><br>
					<input type="text" class="p_title" name="a_user" autocomplete="off" required value="<?php echo $myData['admin_user']; ?>" style ="width: 75%;height: 37px;"></input> <br>

					<label for="a_pwq">Password</label><br>
					<input type="text" class="p_title" name="a_pwq" autocomplete="off" required value="<?php echo $myData['admin_pwd']; ?>" style ="width: 75%;height: 37px;margin-bottom: 45px;"></input> <br>

					<input type="submit" value="Update" name="submit" class="AdminSubmit" style="padding: 18px 22px;float: right;" onclick="return confirm('Update')"><br>

				<?php  }} ?>
				</form>
				<a href="manageProduct.php" onclick="return confirm('Cancel')"><button class="AdminSubmit" style="padding: 18px 22px;float: right;margin: -19px 8px;margin-bottom: 16px;">Cancel</button></a>
			</div>
		</div>
	</section>
</body>