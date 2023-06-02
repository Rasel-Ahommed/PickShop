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
			<a href="adminDashboard.php#dashboard">
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
				<div class="dashboard" id="highlite">
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
</section>
<!-- Manage Product -->
	<section class="users" style="background:#f0f1f2; padding: 80px 0 40px 0px;">
		<div class="userList">
			<div class="tableHead">
				<h1 style="font-size: 21px;">ALL PRODUCTS</h1>
			</div>
			<table class="content-table">
				<?php
					if(isset($_REQUEST['addSuccess'])){
						if(isset($_REQUEST['addSuccess'])){
							echo "<h4 style='color:green;text-align:center;padding-left:235px;font-size:18px'>Update Successful</h4>";
						}
					}
					if(isset($_REQUEST['addfaild'])){
						if(isset($_REQUEST['addfaild'])){
							echo "<h4 style='color:red;text-align:center;padding-left:235px;font-size:18px'>Update Failed !</h4>";
						}
					}
				?>
				<thead>
					<tr>
						<th style="width:50px;">#</th>
						<th style="width: 220px;">Image</th>
						<th>Product Title</th>
						<th style="width: 145px;">Price</th>
						<th>W.D. Price</th>
						<th style="width: 160px;">Action</th>
					</tr>	
				</thead>
				<tbody>
					<?php
	                	require_once("../connection.php");
	                	$count = 1;
	                	$selectQuery = "SELECT * FROM product";
	                	$runQuery = mysqli_query($conn,$selectQuery);
	                	if($runQuery==true){
	                		while($myData = mysqli_fetch_array($runQuery)){?>
	                <tr>
						<td><?php echo $count;$count++ ?></td>
						<td><img style="width: 59px;" src="../asset/Product_image/<?php echo $myData['p_image']; ?>" alt="item"></td>
						<td><?php echo $myData['p_title']; ?></td>
						<td><?php echo $myData['p_price']; ?></td>
						<td><?php echo $myData['p_priceBD']; ?></td>
						<td>
							<a id="deletebtn" style="color: blue;" href="editProduct.php?id=<?php echo $myData['id']; ?>">Edit</a>
						 	<a id="deletebtn" onclick="return confirm('Are you sure you want to delete this Item?');" href="deleteProduct_core.php?id=<?php echo $myData['id']; ?>">Delete</a>
						</td>
					</tr>
					<?php }} ?>
				</tbody>

			</table>		

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