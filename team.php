<?php
if(!$_COOKIE['email']){
	header("location:index.php");
}
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
<body><!--====================================================================
							landing page section start
===================================================================-->

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
	</section>

	<!-- team body -->

	<section class="team">
		<h1>Our Team Members</h1>
		<div class="mamberCont">
			<div class="member">
				<img src="asset/Team_Members/rasel.jpg" alt="image">
				<h3>Rasel Ahammed Rana(Team Leader)</h3>
				<p>Registration: 1502060674 <br>
					Address: Shalikha,Magura <br>
					Phone No: 01308-022388
				</p>
			</div>
			<div class="member">
				<img src="asset/Team_Members/tamal.jpg" alt="image">
				<h3>Tamal Dhali</h3>
				<p>Registration: 1502060649 <br>
					Address: Rampal,Begerhat <br>
					Phone No: 01875-744409
				</p>
			</div>
			<div class="member">
				<img src="asset/Team_Members/samir.jpg" alt="image">
				<h3>Samir Khan</h3>
				<p>Registration: 1502060655 <br>
					Address: Kallyanpur,Dhaka <br>
					Phone No: 01889-410855
				</p>
			</div>
			<div class="member">
				<img src="asset/Team_Members/rahul.jpg" alt="image">
				<h3>Rahul Biswas</h3>
				<p>Registration: 1502060640<br>
					Address: Narail <br>
					Phone No: 01303-438457
				</p>
			</div>
			<div class="member">
				<img src="asset/Team_Members/avatar1.png" alt="image">
				<h3>Suma Dhali</h3>
				<p>Registration: 15020606xx <br>
					Address: xxxxxxxxx <br>
					Phone No: xxxxxxxxx
				</p>
			</div>
			<div class="member">
				<img src="asset/Team_Members/avatar.jpg" alt="image">
				<h3>xxxxxxxxxxx</h3>
				<p>Registration: 15020606xx <br>
					Address: xxxxxxxxxx <br>
					Phone No: xxxxxxxxx
				</p>
			</div>
	</section>					
</body>
