<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PickShop</title>
    <link rel="icon" href="../asset/logo/favicon.png">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- login section -->
    <section class="login">
    	<div class="continer">
    		<div class="joinUs">
        		<img src="../asset/icons/downArrow.png" alt="icon">
        		<h3>PickShop.com</h3>
        		<p>Admin login </p>
        	</div>
        	<div class="loginBox">
        		<h2>Login Here</h2>

        		<form action="adminLogin_core.php" method="POST">
        			<lable>Admin User</lable><br>
        			<input type="text" name="admin_user" autocomplete="off" required><br>
        			<lable>Admin Password</lable><br>
	        		<input type="password" name="admin_pwd" autocomplete="off" required><br>
	        		<input type="submit" value="Log In"  class="loginBtn"><br>
        		</form>
                <?php
                    if(isset($_REQUEST['login'])){
                        if($_REQUEST['login']==true){
                            echo "<h4 style='color:red;text-align: center;'>Invalid User or password !</h4>";
                        }
                    }
                ?>
        	</div>
    	</div>
        
    </section>
</body>
</html>
