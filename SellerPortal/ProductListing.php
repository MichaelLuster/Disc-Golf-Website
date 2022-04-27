<?php
session_start();
include '../server.php';

if($_SESSION['email'] == "")
    header('location: SellerLogIn.php');

//Intialize id variable
$id = $_SESSION['productid'];

$sql = "SELECT * FROM INVENTORY";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    if($row['ID'] == $id)
        break;
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="SellerStyle.css">
<head>
    <title>Seller Portal</title>
</head>
<body>
    <?php include_once("SellerTemplate_header.php");?>
    <div class = "navbar">
        <a href= "SellerMainMenu.php">Home</a>
        <a class = "active" href = "Inventory_List.php">Inventory</a>
        <a href = "#ViewOrders">Orders</a>
        <a href = "#ViewMessages">Messages</a>
        <a href = "#ViewFeedback">Feedback</a>
        <a href = "#ViewPayments">Payments</a>
        <a a href="SellerLogIn.php?logout='1'"> Sign Out</a>
    </div>
    <div class = "Body">
        <div style = "font-size:20px; color:gray, padding-bottom:20px">Add a Product or Manage Inventory</div>
        <div class = "SellerDiscPortal">
            <button class = "ViewAll">View ALL PRICES</button>
            <?php $img = "../Disc_Images/Disc".$row["ID"].".png"; ?>
            <img src= "<?php echo $img;?>" width = "300" height = "300" style = "position:absolute; top:250px; left:0px">
            <table class = "productDescription">
                <tr><td style = "text-align:center">Product Info</td></tr>
                <?php if($row['DISCTOURSERIES'] != "") ?>
                    <tr><td ><b>Tour Series</b><br><?php echo $row['DISCTOURSERIES']; ?></td></tr>
                <?php if($row['DISCRUN'] != "") ?>
                    <tr><td><b>Run</b><br><?php echo $row['DISCRUN']; ?></td></tr>
                    <tr><td><b>Name</b><br><?php echo $row["DISCNAME"]; ?> </td></tr>
                    <tr><td><b>Manufacturer</b><br><?php echo $row["DISCMANUFACTURER"]; ?> </td></tr>
                    <tr><td><b>Plastic</b><br><?php echo $row["DISCPLASTIC"]; ?> </td></tr>
                    <tr><td><b>Speed</b><br><?php echo $row['DISCSPEED']; ?> </td></tr>
                    <tr><td><b>Glide</b><br><?php echo $row['DISCGLIDE']; ?> </td></tr>
                    <tr><td><b>Turn</b><br><?php echo $row['DISCTURN']; ?> </td></tr>
                    <tr><td><b>Fade</b><br><?php echo $row['DISCFADE']; ?> </td></tr>
                    <tr><td><b>Use</b><br><?php echo $row['DISCUSE']; ?> </td></tr>
                    <tr><td><b>Stability</b><br><?php echo $row['DISCSTABILITY']; ?> </td></tr>
                    <tr><td><b>Bead</b><br><?php echo $row['DISCBEAD']; ?> </td></tr>
            </table>
            <form class = "productInventory" action="ProductListing.php" method = "post">
                <button class = "productSave" type = "submit"  name ="productListingSave">Save</button> 
                <table style = "width:1245px">
                    <tr><th colspan = "3"><?php echo $row['DISCTOURSERIES']." ".$row['DISCRUN']." ".$row['DISCNAME']; ?></th></tr>
                    <tr>
                        <td>Condition</td>
                        <td>Price</td>
                        <td>Quantity</td>
                    <tr>
                    <tr>
                        <td>Brand New</td>
                        <td>$<input type = "text" name = "price"/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = "quantity"></td>
                    </tr>
                    <tr>
                        <td>Slightly Used</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Moderately Used</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Heavily Used</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Brand New (Inked)</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Slightly Used (Inked)</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Moderately Used (Inked)</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>
                    <tr>
                        <td>Heavily Used (Inked)</td>
                        <td>$<input type = "text" name = ""/> Shipping: $<?php echo $_SESSION['shipping']?></td>
                        <td><input type = "text" name = ""></td>
                    </tr>       
                </table>
                <button class = "productSave" type = "submit"  name ="productListingSave">Save</button> 
            </form>
        </div>
    </div>
</body>
</html>