<?php
   if(isset($_COOKIE['email'])){
    header("location:home.php");
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
<body>
    <!-- login section -->
    <section class="login">
    	<div class="continer">
    		<div class="joinUs">
        		<img src="asset/icons/downArrow.png" alt="icon">
        		<h3>Join Us </h3>
        		<p>Join us and make your shopping easy</p>
        		<a href="signUp.php" ><button id="button">Sign Up </button></a>
        	</div>
        	<div class="loginBox">
        		<h2>Login Here</h2>

        		<form action="login_core.php" method="POST">
        			<lable>Email</lable><br>
        			<input type="email" name="email" autocomplete="off" required><br>
        			<lable>Password</lable><br>
	        		<input type="password" name="password" autocomplete="off" required><br>
	        		<input type="submit" value="Log In"  class="loginBtn"><br>
        		</form>
                <?php

                    if(isset($_REQUEST['signUp'])){
                        if($_REQUEST['signUp']==true){
                            echo "<h4 style='color:green;text-align: center;'>Sign up sucessfull Please login</h4>";
                        }
                    }
                    if(isset($_REQUEST['login'])){
                        if($_REQUEST['login']==true){
                            echo "<h4 style='color:red;text-align: center;'>Invalid Email or password !</h4>";
                        }
                    }
                    if(isset($_REQUEST['blocked'])){
                        if($_REQUEST['blocked']==true){
                            echo "<h4 style='color:red;text-align: center;'>Your access has been blocked !</h4>";
                        }
                    }
                ?>
        	</div>
    	</div>
    </section>
</body>
</html>
