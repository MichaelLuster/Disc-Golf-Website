<?php include('server.php') ?>

<!DOCTYPE html>
<link rel="stylesheet" href="styles/LogInSignUp.css">
<html>
<head>
   <title>Login</title>
</head>

<body>
    <div class="splitleft">
		<a href = "MainMenu.php"><img src="Images/HomeButton.png" width = "75" height = "75"></a>
	</div>

	<div class="splitright">
		<div class="centered">  
            <h1 style = "text-align: center">Log In</h1>  
            <form action="CustomerLogin.php" method = "post">
                <?php include('errors.php') ?>
                <div>
                Username/Email:<input type = "text" name = "username" required>
                </div>
                <div>
                Password:<input type = "password" name = "password" required>
                </div>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                <button type = "submit" name = "login_user"> Log In </button> 
                <p style= "font-size:12px; text-align:center">Don't have an account yet?</p>
				<p style="text-align:center"><a href="CustomerSignUp.php" style="color:dodgerblue; text-decoration:none; font-size:12px">Make one here</a></p>
            </form>
      </div>   
   </div>

</body>
<html>