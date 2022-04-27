<?php include('../server.php') ?>

<!DOCTYPE html>
<link rel="stylesheet" href="../styles/LogInSignUp.css">
<html>
<head>
   <title>Admin Login</title>
</head>

<body>
    <div class="splitleft">
		<a href = "../MainMenu.php"><img src="../Images/HomeButton.png" width = "75" height = "75"></a>
	</div>

	<div class="splitright">
		<div class="centered">  
            <h1 style = "text-align: center">Admin Log In</h1>  
            <form action="AdminLogIn.php" method = "post">
                <?php include('../errors.php') ?>
                <div>
                Username:<input type = "text" name = "manager" required>
                </div>
                <div>
                Password:<input type = "password" name = "password" required>
                </div>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                <button type = "submit" name = "Admin_login_user"> Log In </button> 
            </form>
      </div>   
   </div>

</body>
<html>