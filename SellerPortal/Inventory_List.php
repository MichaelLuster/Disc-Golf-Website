<?php
session_start();
 include '../server.php';

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
                <a href= "SellerMainMenu.php">Home</a>
                <a class = "active" href = "Inventory_List.php">Inventory</a>
                <a href = "#ViewOrders">Orders</a>
                <a href = "#ViewMessages">Messages</a>
                <a href = "#ViewFeedback">Feedback</a>
                <a href = "#ViewPayments">Payments</a>
                <a a href="SellerLogIn.php?logout='1'"> Sign Out</a>
            </div>
<body>
    <?php
        //get products id
        $sql = "SELECT * FROM SELLER_INV SI join SELLER S on S.ID = SI.SELLER_ID join INVENTORY I on I.ID = SI.INV_ID";
        $result = mysqli_query($conn, $sql);
    ?>
    <div class = "ProductCatalog">
        <table style="width:100%">
            <tr>
                <th>Product Catalog</th>
            </tr>
            <tr>
                <td>Tour Series</td>
                <td>Run</td>
                <td>Name</td> 
                <td>Manufacturer</td>
                <td>Plastic</td>
                <td>In Stock</td>
                <td></td>
            </tr>
            <?php while($row = mysqli_fetch_array($result)){
                ?><tr style = "text-align:center">
                    <td> <?php echo $row['DISCTOURSERIES']; ?> </td>
                    <td> <?php echo $row['DISCRUN']; ?> </td>
                    <td> <?php echo $row["DISCNAME"]; ?> </td>
                    <td> <?php echo $row["DISCMANUFACTURER"]; ?> </td>
                    <td> <?php echo $row["DISCPLASTIC"]; ?> </td>
                    <td><?php
                        if($row['QUANTITY'] == NULL)
                            echo "-";
                        else
                            echo $row['QUANTITY'];
                    ?></td>
                    <td>
                        <?php $_SESSION['productid'] = "1"; ?>
                        <a href="ProductListing.php"><button> Manage</button></a>
                    </td>
                </tr><?php
            }?>
        </table>
    </div>
</body>
<html>