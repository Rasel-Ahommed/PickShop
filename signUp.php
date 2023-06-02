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
    <!-- sign up section -->
    <section class="login">
    	<div class="continer">
    		<div class="joinUs">
        		<img src="asset/icons/downArrow.png" alt="icon">
        		<h3>Join Us </h3>
        		<p>Join us and make your shopping easy</p>
        		<a href="index.php" ><button id="button">Login</button></a>
        	</div>
        	<div class="loginBox" style="height: 500px;margin-top: 38px;">
        		<h2>Sign Up Here</h2>

        		<form action="signup_core.php" method="POST">
        			<lable>Name</lable><br>
        			<input type="text" name="name" required><br>

        			<lable>Email</lable><br>
	        		<input type="email" name="email" required><br>

                    <lable>Phone No</lable><br>
                    <input type="number" name="phone" required ><br>

                    <lable>Password</lable><br>
                    <input type="password" name="password" required><br>

	        		<input type="submit" value="Sign Up" name="submit"  class="loginBtn"><br>
                    <?php
                        if(isset($_REQUEST['exist'])){
                            if($_REQUEST['exist']==true){
                                echo "<h4 style='color:red;text-align: center;'>This email address is already exist !</h4>";
                            }
                        }
                        if(isset($_REQUEST['signError'])){
                            if($_REQUEST['signError']==true){
                                echo "<h4 style='color:red;text-align: center;'>Sign up faild please try again !</h4>";
                            }
                        }
                    ?>
        		</form>
        	</div>
    	</div>
        
    </section>
</body>
</html>
