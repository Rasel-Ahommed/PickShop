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
			<a href="#dashboard">
				<div class="dashboard" id="highlite">
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
				<div class="dashboard">
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
<!-- admin body -->
		<div class="adminHead">
			<h1><span style="color: #6b7280;">Admin</span> / Dashboard</h1>
		</div>
		<div class="fill"></div>
		<div class="dtlsContiner">
			<div class="dtlsBox">
				<div class="left">
					<p>Users</p>
					<h1>5000+</h1>
				</div>
				<div class="right">
					<img src="../asset/icons/users.png" alt="img">
				</div>
			</div>
			<div class="dtlsBox">
				<div class="left">
					<p>Sales</p>
					<h1>$7,770+</h1>
				</div>
				<div class="right">
					<img src="../asset/icons/basket.png" alt="img">
				</div>
			</div>
			<div class="dtlsBox">
				<div class="left" style="padding: 45px 24px;">
					<p>Performance</p>
					<h1>256%</h1>
				</div>
				<div class="right" style="padding: 30px 35px;">
					<img  style="width: 72px;" src="../asset/icons/growUp.png" alt="img">
				</div>
			</div>
		</div>

<!-- Performance section -->

		<div class="parformHead">
			<h3>Performance</h3>
		</div>
		<div class="parformBody">
			<img src="../asset/icons/grape.png" alt="grap">
		</div>

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
</html>