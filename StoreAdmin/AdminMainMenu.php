<?php
session_start();

if($_SESSION['manager'] == "")
    header('location: AdminLogIn.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Store Admin Area</title>
</head>
<body>
<div align ="center" id = "mainWrapper">
    <?php include_once("../template_header.php");?>
    <div id="pageContent"><br/>
    <div align="left" style = "margin-left:24px">
        <h2> Hello, what would you like to do today?<h2>
        <p><a href="Inventory_List.php">Manage Inventory</a><br>
        <a href="#">Something else</a><p>
    </div>
    <br/>
    </div>
    <div id="pageFooter"></div>
</div>
</body>
</html>