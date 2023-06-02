<?php
if(!$_COOKIE['email']){
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PickShop</title>
	<link rel="icon" href="asset/logo/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section class="login">
		<div class="continer">
    		<div class="joinUs">
        		<img src="asset/icons/downArrow.png" alt="icon">
        		<h3>Edit Your Profile </h3>
        		<a href="home.php" onclick="return confirm('Cancel')"><button id="button">Cancel</button></a>
        	</div>
        	<div class="loginBox" style="height: 526px;margin-top: 23px;">
        		<h2 style="margin-bottom:43px;">Edit Here</h2>

        	<?php
        		require_once("connection.php");
        		$cookieEmail = $_COOKIE['email'];

        		$selectQuery = "SELECT * FROM signup_info WHERE email = '$cookieEmail' ";
        		$runQuery = mysqli_query($conn,$selectQuery);
        		if($runQuery==true){
        			while($myData=mysqli_fetch_array($runQuery)){?>

        		<form enctype="multipart/form-data" action="profileEdit_core.php" method="POST">
        			<span style="font-weight: bold;margin-left: 64px;">Profile picture : </span>
        			<input type="file" name="profile" style="border: none;width: fit-content;margin: inherit;"><br>

        			<lable>Name</lable>
        			<input type="text" name="name" value="<?php echo $myData['user_name']?>" required><br>

        			<lable>Email</lable>
	        		<input type="email" name="email" value="<?php echo $myData['email']?>" required><br>

                    <lable>Phone No</lable>
                    <input type="number" name="phone" value="<?php echo $myData['phone']?>" required><br>

                    <lable>Password</lable>
                    <input type="text" name="password" value="<?php echo $myData['password']?>" required><br>
                    <input type="hidden" name="edittedId"  value="<?php echo $myData['id']?>"><br>

	        		<input type="submit" value="Update" name="Update"  class="loginBtn" onclick="return confirm('Update')" style="    margin: -8px 203px;"><br>
        		</form>

        	<?php }}?>

	</section>
</body>
</html>