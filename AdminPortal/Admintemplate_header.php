<?php
session_start();

?>

<link rel="stylesheet" href="AdminStyle.css">
<div class = "topNavigation">
	<a href = "SellerMainMenu.php"><img src="../Images/HomeButton.png" width = "75" height = "75" align = "left" style = "position:absolute; left:10px; top: 10px"></a>
    <div class= "topNavText">ADMIN PORTAL</div>
    <div class = "WelcomeBack"><b>Welcome <?php echo $_SESSION['manager']; ?></b></div>
</div>