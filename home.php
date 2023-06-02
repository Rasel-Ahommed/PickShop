<?php
if(!$_COOKIE['email']){
	header("location:index.php");
}
$cookieEmail = $_COOKIE['email'];

require_once("connection.php");
$selectData = "SELECT * FROM signup_info WHERE email ='$cookieEmail' ";
$runQuery = mysqli_query($conn,$selectData);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PickShop</title>
	<link rel="icon" href="asset/logo/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- =========================================================
							landing page section start
	=========================================================-->

	<section class="landing" id="home">

	<!-- nav bar -->

		<nav class="manu" id="navbar" >

			<!-- logo -->
			<div class="logo">
				<img src="asset/logo/logo.png" alt="logo">
			</div>
			<!-- manu items -->
			<div class="manuItem">	
				<ul>
					<a href="home.php#home">
						<li>Home</li>
					</a>
					<a href="add_to_card.php">
						<li>Cart</li>
					</a>
					<a href="team.php">
						<li>Team</li>
					</a>
					<a href="#contact">
						<li>About</li>
					</a>
				</ul>
			</div>
		</nav>

	<!-- search bar  -->
		<div class="search">
			<input type="text">
			<a href="home.php"><button class="searchBtn">Search</button></a>
		</div>

	<!-- left side bar -->
	<div class="manu_line" id="manuLine">
		<img src="asset/icons/3 line.png" alt="">
	</div>
	<div class="leftBar" id="leftBar">
		<img class="cancle" id="cancle" src="asset/icons/cancle1.png" alt="">
		<div class="profile">
			<div class="avatar">
				<img src="<?php
					if($runQuery==true){
						while($row=mysqli_fetch_array($runQuery)) {
  						echo $row["profile"];
  					?>"
  				alt="avarar">
			</div>
			<h3><?php
				echo $row['user_name'];
				}}?></h3>
			<a href="profileEdit.php"><img class="edit" title=Edit-profile src="asset/icons/edit.png" alt="icon"></a>
		</div><hr>

		<div class="items">
			<ul>
				<a href="#sopping">
					<div class="itm">
						<li>Men's Fashion</li>
					</div>
				</a>
				<a href="#sopping">
					<div class="itm">
						<li>Sports & Outdoors</li>
					</div>
				</a>
				<a href="#sopping">
					<div class="itm">
						<li>Electronics Devices</li>
					</div>
				</a>
				<a href="#sopping">
					<div class="itm">
						<li>Bags</li>
					</div>
				</a>
				<a href="#sopping">
					<div class="itm">
						<li>Man's Watch</li>
					</div>
				</a>
				<a href="#sopping">
					<div class="itm">
						<li>Shoes</li>
					</div>
				</a>
				<a href="logout.php" onclick="return confirm('Log Out')">
					<div class="itm">
						<li style="color: #ee0606;font-weight: bold;"><img class="logout" src="asset/icons/logout.png" alt="icon">Log out</li>
					</div>
				</a>
			</ul>
		</div>
	</div>

	<!-- head line -->
	<div class="headLine">
		<a href="#sopping"><button class="strtSpn">Start Shopping</button></a>
	</div>
	</section>

	<!--==========================================================
							Items page section start
		======================================================-->

<section class="itemPage" id="sopping">
	<h2>Just For You</h2>
	<div class="itemContiner">
		<?php

		require_once("connection.php");

		$selectData = "SELECT * FROM product";
		$runQuery = mysqli_query($conn,$selectData);
		if($runQuery==true){
			while($myData=mysqli_fetch_array($runQuery)){?>

			<div class="item">
				<img src="asset/Product_image/<?php echo $myData['p_image'];?>" alt="image">
				<h4><?php echo $myData['p_title'];?></h4>
				<h5>৳<?php echo $myData['p_price'];?></h5>
				<h6><del>৳<?php echo $myData['p_priceBD'];?></del></h6>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;</p>
				<a href="buyProduct.php?id=<?php echo $myData['id'] ?>"><button id="buy">Buy</button></a>
				
			</div>
		<?php }} ?>
	</div>
</section>

	<!--=======================================================
							Footer section start
		=======================================================-->

<section class="footer" id="contact">
	<div class="footerContiner">
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
	<div class="DwnApp">
		<img src="asset/logo/logo.png" alt="logo">
		<h2>Contact Us</h2>
		<p><a href="tel:+024946854" style="color: white;text-decoration: none;">+024946854</a></p>
		<p>pickshop123@gmail.com</p>

	</div>
</section>


<!-- java script -->

	<script type="text/javascript" >
		document.querySelector("#manuLine").addEventListener("click",verticalShow);
		function verticalShow(){
		document.getElementById("leftBar").setAttribute("style","opacity:1;transform:scaleX(1)");
		}
	
		document.querySelector("#cancle").addEventListener("click",verticalClose);
		function verticalClose(){
		document.getElementById("leftBar").setAttribute("style","opacity:0;transform:scaleX(0)");
		}
		document.querySelector("#navbar").addEventListener("click",verticalClose);
		function verticalClose(){
		document.getElementById("leftBar").setAttribute("style","opacity:0;transform:scaleX(0)");
		}
	</script>
	
</body>
</html>