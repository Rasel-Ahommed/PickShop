<?php
if(!$_COOKIE['admin_user']){
	header("location:admin.php");
}

require_once("../connection.php");
$selectQuery = "SELECT * FROM admin_info";
$runQuery = mysqli_query($conn,$selectQuery);
if($runQuery==true){
	while($myData=mysqli_fetch_array($runQuery)){
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
	<section class="adminDashboard" id="dashboard">
<!-- top bar  -->
		<div class="topBar">
			<div class="logo"><img src="../asset/logo/logo.png" alt="logo"></div>
			<div class="logOut"><a onclick="return confirm('Log out')" href="adminLogOut.php" title="Log out"><img src="../asset/icons/AlogOut.png" alt="logout"></a></div>
			<div class="user"><a href="updateAdmin.php" title="Update profile"><img src="../asset/icons/avatar.png" alt="avatar"><p><?php echo $myData['admin_user']; }} ?></p></a></div>
		</div>
<!-- side manu -->
		<div class="sidemanu">
			<p>GENERAL</p>
			<a href="adminDashboard.php">
				<div class="dashboard">
				    <span>Dashboard</span>
			    </div>
		    </a>
		    <p>EXAMPLES</p>
			<a href="userInfo.php">
				<div class="dashboard">
				    <span>Users</span>
			    </div>
		    </a>
		    <a href="manageProduct.php">
				<div class="dashboard">
				    <span>Manage Product</span>
			    </div>
		    </a>
		    <a href="addProduct.php">
				<div class="dashboard" id="highlite">
				    <span>Add Product</span>
			    </div>
		    </a>
		    <p>ABOUT</p>
			<a href="#contact">
				<div class="dashboard">
				    <span>About us</span>
			    </div>
		    </a>
		    <a href="#contact">
				<div class="dashboard">
				    <span>Contact</span>
			    </div>
		    </a>		
		</div>
	</section>

	<!-- Add product -->
	
	<section class="addProduct" style="background:#f0f1f2; padding: 54px 0 40px 0px;">
		<div class="addProduct">
			<div class="addArea">
				<h1>Add New Product</h1>
				<?php
					if(isset($_REQUEST['addSuccess'])){
						if(isset($_REQUEST['addSuccess'])){
							echo "<h4 style='color: #1dd81d;text-align: center;font-size: 17px;padding: 0 0 15px 0px;'>Product add successfull</h4>";
						}
					}
					if(isset($_REQUEST['addFaild'])){
						if(isset($_REQUEST['addFaild'])){
							echo "<h4 style='color:red;text-align: center;font-size: 17px;padding: 0 0 15px 0px;'>Product add Faild !</h4>";
						}
					}
				?>
				<form enctype="multipart/form-data" action="addProduct_core.php" method="post">
					<span style="font-weight: bold;">Product image : </span>
					<input type="file" name="PrdImg" required><br><br>
					<label for="title">Product Title</label><br>
					<textarea type="text" name="title" autocomplete="off" required></textarea> <br>
					<label for="price">Product price</label><br>
					<input type="number" id="addProduct" name="price" autocomplete="off" required><br>
					<label for="BDprice">Product price with out discount </label><br>
					<input type="number" id="addProduct" name="BDprice" autocomplete="off" ><br>
					<input type="submit" value="Submit" name="submit" class="AdminSubmit" style="margin: 35px 194px;"><br>
				</form>
			</div>
		</div>
	</section>

 <!-- footer section -->

<section class="footer" id="contact">
	<div class="footerContiner" style="margin: 0px 12px;margin-left: 280px;">
		<h3>Customer Care</h3>
		<ul>
			<li>Help Center</li><br><br>
			<li>How to Buy</li><br><br>
			<li>Returns & Refunds</li><br><br>
			<li>Contact Us</li><br><br>
			<li>Terms & Conditions</li><br><br>
			<li>CCMS - Central Complain Management System</li><br><br>
		</ul>
	</div>
	<div class="footerContiner">
		<h3>PickShop</h3>
		<ul>
			<li>About PickShop</li><br><br>
			<li>Digital Payments</li><br><br>
			<li>PickShop Cares</li><br><br>
			<li>Contact Us</li><br><br>
			<li>Privacy Policy</li><br><br>
			<li>PickShop Exclusives</li><br><br>
		</ul>
	</div>
	<div class="DwnApp" style="margin: 42px 80px;">
		<img src="../asset/logo/logo.png" alt="logo">
		<h2>Contact Us</h2>
		<p><a href="tel:+024946854" style="color: white;text-decoration: none;">+024946854</a></p>
		<p>pickshop123@gmail.com</p>

	</div>
</section>
</body>