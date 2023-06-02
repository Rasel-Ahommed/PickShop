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
				<div class="dashboard" id="highlite">
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
	</section>
	<!-- Manage users -->

	<section class="users" style="background:#f0f1f2; padding: 10px 0 40px 0px;">
		<div class="userList">
			<div class="tableHead">
				<h1>ALL USERS</h1>
			</div>
			<table class="content-table">
				<?php
					if(isset($_REQUEST['delete'])){
						if(isset($_REQUEST['delete'])){
							echo "<h4 style='color:red;text-align:center;padding-left:235px;font-size:18px'>Failed to delete !</h4>";
						}
					}
				?>
				<thead>
					<tr>
						<th style="width:50px;">#</th>
						<th style="width: 220px;">Name</th>
						<th>Email</th>
						<th style="width: 145px;">Phone No</th>
						<th>Status on/off</th>
						<th style="width: 110px;">Action</th>
					</tr>	
				</thead>
				<tbody>
					<?php
	                	require_once("../connection.php");
	                	$count = 1;
	                	$selectQuery = "SELECT * FROM signup_info";
	                	$runQuery = mysqli_query($conn,$selectQuery);
	                	if($runQuery==true){
	                		while($myData = mysqli_fetch_array($runQuery)){?>
	                <tr>
						<td><?php echo $count;$count++ ?></td>
						<td><?php echo $myData['user_name']; ?></td>
						<td><?php echo $myData['email']; ?></td>
						<td>+880<?php echo $myData['phone']; ?></td>
						<td
							<?php
								if($myData['status']<1){
									echo "style='background:red;color:white'";
								}
							?>


						><?php echo $myData['status']; ?></td>
						<td>
							<a href="blockUser.php?id=<?php echo $myData['id']; ?>">
								<img src="../asset/icons/eye.png" alt="eye" id="eye"></a>
						 	<a onclick="return confirm('Are you sure you want to delete this user?');" href="deletUser_core.php?id=<?php echo $myData['id']; ?>"><img src="../asset/icons/delete.png" alt="delete"></a>
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
</html>