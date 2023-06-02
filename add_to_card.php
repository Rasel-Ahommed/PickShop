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
					<a href="home.php#contact">
						<li>About</li>
					</a>
				</ul>
			</div>
		</nav>

	<!-- buy product section -->
<h1 class="cardHead">Add to card <br> 
</h1>
	<table class="cart">
		<tbody>
<?php
if(isset($_REQUEST['deleted'])){
	if(isset($_REQUEST['deleted'])){
		echo "<h4 style='color:green;text-align:center;font-size:18px;position: absolute;top:22%;left:45%;'>Remove Successful</h4>";
	}
}
?>

<?php

require_once("connection.php");

$selectData = "SELECT * FROM add_to_cart";
$runQuery = mysqli_query($conn,$selectData);
if($runQuery==true){
	while ($myData=mysqli_fetch_array($runQuery)) {?>

	    <tr>
			<td><img src="asset/Product_image/
			<?php echo $myData['img']; ?>" alt="item">
			<h2><?php echo $myData['pdtTitle']; ?></h2>
			<h4><?php echo $myData['pdtPrice']; ?></h4>
			
				<a id="deletebtn" style="float: right;" onclick="return confirm('Remove item?');" href="rmv_card_core.php?id=<?php echo $myData['id']; ?>">Remove</a>
			</td>
		</tr>
<?php }} ?>
				</tbody>
			</table>
		</section>
	</body>
</html>