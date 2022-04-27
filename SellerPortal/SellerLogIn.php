<?php include('../server.php') ?>

<!DOCTYPE html>
<link rel="stylesheet" href="../styles/LogInSignUp.css">
<html>
<head>
   <title>Seller Login Portal</title>
</head>

<body>
    <div class="splitleft">
		<a href = "SellerMainMenu.php"><img src="../Images/HomeButton.png" width = "75" height = "75"></a>
	</div>

	<div class="splitright">
		<div class="centered">  
            <h1 style = "text-align: center">Seller Log In</h1>  
            <form action="SellerLogIn.php" method = "post">
                <?php include('../errors.php') ?>
                <div>
                Email:<input type = "text" name = "email" required>
                </div>
                <div>
                Password:<input type = "password" name = "password" required>
                </div>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                <button type = "submit" name = "Seller_login_user"> Log In </button> 
                <p style= "font-size:12px; text-align:center">Don't have a seller account yet?</p>
				<p style="text-align:center"><a href="SellerSignUp.php" style="color:dodgerblue; text-decoration:none; font-size:12px">Make one here</a></p>
            </form>
      </div>   
   </div>

</body>
<html>