<?php include('../server.php') ?>

<!DOCTYPE html>
<link rel="stylesheet" href="../styles/LogInSignUp.css">
<html>
<head>
   <title>Seller Sign Up</title>
</head>

<body>
   <div class="splitleft">
		<a href = "SellerMainMenu.php"><img src="../Images/HomeButton.png" width = "75" height = "75"></a>
	</div>
   <div class="splitright">
		<div class="centered">  
         <h1 style = "text-align: center">Seller Sign Up</h1>  
         <form action="SellerSignUp.php" method = "post">
            <?php include('errors.php') ?>
            <div>
               Store Name:<input type = "text" name = "storename" required>
            </div>
            <div>
               Email:<input type = "text" name = "email" required>
            </div>
            <div>
               Password:<input type = "password" name = "password" required>
            </div>
            <div>
               Confirm Password:<input type = "password" name = "Confirmpassword" required>
            </div>
            <button type = "submit" name ="seller_sign_up"> Submit </button> 
            <p style= "font-size:12px; text-align:center">Already have an Account?</p>
				<p style="text-align:center"><a href="SellerLogin.php" style="color:dodgerblue; text-decoration:none; font-size:12px">Sign in here</a></p>
         </form>  
      </div>   
   </div>

</body>
<html>