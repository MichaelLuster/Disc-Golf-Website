<?php include('server.php') ?>

<!DOCTYPE html>
<link rel="stylesheet" href="styles/LogInSignUp.css">
<html>
<head>
   <title>Sign Up</title>
</head>

<body>
   <div class="splitleft">
		<a href = "MainMenu.php"><img src="Images/HomeButton.png" width = "75" height = "75"></a>
	</div>
   <div class="splitright">
		<div class="centered">  
         <h1 style = "text-align: center">Sign Up</h1>  
         <form action="CustomerSignUp.php" method = "post">
            <?php include('errors.php') ?>
            <div>
               Username:<input type = "text" name = "username" required>
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
            <button type = "submit" name ="sign_up"> Submit </button> 
            <p style= "font-size:12px; text-align:center">Already have an Account?</p>
				<p style="text-align:center"><a href="CustomerLogin.php" style="color:dodgerblue; text-decoration:none; font-size:12px">Sign in here</a></p>
         </form>  
      </div>   
   </div>

</body>
<html>