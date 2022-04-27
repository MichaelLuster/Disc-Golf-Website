<?php
session_start();

if($_SESSION['email'] == "")
    header('location: SellerLogIn.php');
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="SellerStyle.css">
<head>
    <title>Seller Portal</title>
</head>
<?php include_once("SellerTemplate_header.php");?>
<div class = "navbar">
    <a class = "active" href= "SellerMainMenu.php">Home</a>
    <a href = "Inventory_List.php">Inventory</a>
    <a href = "#ViewOrders">Orders</a>
    <a href = "#ViewMessages">Messages</a>
    <a href = "#ViewFeedback">Feedback</a>
    <a href = "#ViewPayments">Payments</a>
    <a a href="SellerLogIn.php?logout='1'"> Sign Out</a>
</div>
<body>
    
    <div align="left" style = "margin-left:24px">
        <h2> Hello, what would you like to do today?<h2>
        <p><a href="Inventory_List.php">Manage Inventory</a><br>
        <a href="#">Something else</a><p>
    </div>
</body>
</html>