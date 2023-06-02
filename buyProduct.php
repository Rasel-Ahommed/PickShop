<?php
if(!$_COOKIE['email']){
	header("location:index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PickShop</title>
	<link rel="icon" href="asset/logo/favicon.png">
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			background: #eff0f5;
		}
	</style>
</head>
<body>

	<section>

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

	<!-- buy product section -->
<?php
require_once("connection.php");
$usrId = $_REQUEST['id'];

$selectData = "SELECT * FROM product WHERE id = $usrId";
$runQuery = mysqli_query($conn,$selectData);
if($runQuery==true){
	while ($myData=mysqli_fetch_array($runQuery)) {?>
			<div class="buyItem">

			<form action="AddToCart_core.php" method="POST">
				<img name="image" src="asset/Product_image/<?php echo $myData['p_image'];?>" alt="image">
				<div class="buy">
					<h4 name="pdtTitle"><?php echo $myData['p_title'];?></h4>

					<h5 name="pdtPrice">৳<?php echo $myData['p_price'];?></h5>

					<h6><del>৳<?php echo $myData['p_priceBD'];?></del></h6>

					<p>&#9733;&#9733;&#9733;&#9733;&#9734;</p>
					<input type="hidden" name="id" value="<?php echo $myData['id'] ?>">

					<button onclick="return confirm('Add to cart')" id="buy" type="submit" style="width: 120px;margin:88px 38px 27px 41px;font-weight: bold;padding: 20px;">Add to cart</button>

					<a href="home.php" onclick="return confirm('Cancel')"><span id="buy" style="width: 120px;margin:86px 16px 24px 30px;;font-weight: bold;padding: 20px;text-align: center;font-size: 14px;">Cancel</span></a>	
				</div>
			</form>
		
			<div class="sideNote">
				<h4>Delivery</h4>
				<p id="changeP">Dhaka, Dhaka North, Banani Road No.12</p>
				<p id="changeP">Free Delivery</p>
				<p id="changeP">Enjoy free shipping promotion</p>
				<p id="changeP">Cash on Delivery Available</p>
				<h4>7 Days Returns</h4>
				<p id="changeP">Change of mind is not applicable</p>
				<h4>Warranty not available</h4>
			</div>
			
		</div>	

<?php }} ?>
</section>
</body>
</html>

