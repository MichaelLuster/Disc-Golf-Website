
<?php
session_start();

if($_SESSION['manager'] == "")
    header('location: AdminLogIn.php');

include '../server.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
</head>
<body>
<div align ="center" id = "mainWrapper">
    <?php include_once("../AdminTemplate_header.php");?>
    <div id="pageContent"><br/>
    <div align="left" style = "margin-left:24px">
        <h2> Inventory List<h2>
            <?php 
                
                if(array_key_exists('ShowInventory',$_POST)){
                    ShowInventory();
                }
                else{
                    HideInventory();
                }
                function ShowInventory(){
                    ?><form method ="post">
                    <input type="submit" name="HideInventory" class="button" value="HideInventory"/>
                    </form>
                    <?php
                    include '../server.php';
                    $product_List = "";
                    $sql = "SELECT * FROM INVENTORY";
                    $result = mysqli_query($conn, $sql);
                    $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){?> 
                        <table style="width:100%"> 
                            <tr>
                                <th>Disc Image</th>
                                <th>Tour Series</th>
                                <th>Run</th>
                                <th>Name</th>
                                <th>Manufacturer</th>
                                <th>Plastic</th>
                                <th>Speed</th>
                                <th>Glide</th>
                                <th>Turn</th>
                                <th>Fade</th>
                                <th>Use</th>
                                <th>Stability</th>
                                <th>Bead</th>
                                <th>Description</th>
                            </tr>
                            <?php while($row = mysqli_fetch_array($result)){
                                ?><tr style = "text-align:center">
                                    <?php $img = "../Disc_Images/Disc".$row["ID"].".png"; ?>
                                    <td> <img src= "<?php echo $img;?>" width = "75" height = "75"></td>
                                    <td> <?php echo $row['DISCTOURSERIES']; ?> </td>
                                    <td> <?php echo $row['DISCRUN']; ?> </td>
                                    <td> <?php echo $row["DISCNAME"]; ?> </td>
                                    <td> <?php echo $row["DISCMANUFACTURER"]; ?> </td>
                                    <td> <?php echo $row["DISCPLASTIC"]; ?> </td>
                                    <td> <?php echo $row['DISCSPEED']; ?> </td>
                                    <td> <?php echo $row['DISCGLIDE']; ?> </td>
                                    <td> <?php echo $row['DISCTURN']; ?> </td>
                                    <td> <?php echo $row['DISCFADE']; ?> </td>
                                    <td> <?php echo $row['DISCUSE']; ?> </td>
                                    <td> <?php echo $row['DISCSTABILITY']; ?> </td>
                                    <td> <?php echo $row['DISCBEAD']; ?> </td>
                                    <td> <?php echo $row['DISCDESCRIPTION']; ?> </td>
                                </tr><?php
                            }?>
                        </table><?php
                    }
                    else{
                        echo "You have no products listed";
                    }
                }
                function HideInventory(){
                    ?><form method ="post">
                        <input type="submit" name="ShowInventory" class="button" value="ShowInventory"/>
                        </form>
                    <?php
                }
            ?>
            
    </div>
    <h3>
        Add new Item
    </h3>
    <?php include('../errors.php') ?>
    <form action="Inventory_List.php" method = "post">
        <?php include('errors.php') ?>
        <div>Disc Tour Series: <input type = "text" name = "disctourseries"></div>
        <div>Disc Run: <input type = "text" name = "discrun"></div>
        <div>Disc Name: <input type = "text" name = "discname" required></div>
        <div>Disc Manufacturer: <input type = "text" name = "discmanufacturer" required></div>
        <div>Disc Plastic:<input type = "text" name = "discplastic" required></div>
        <div>Disc Speed: <input type = "text" name = "discspeed" required></div>
        <div>Disc Glide: <input type = "text" name = "discglide" required></div>
        <div>Disc Turn: <input type = "text" name = "discturn" required></div>
        <div>Disc Fade: <input type = "text" name = "discfade" required></div>
        <div>Disc Stability: <select name = "discuse" required>
                                <option value =""></option>
                                <option value = "Putter">Putter</option>
                                <option value = "Midrange">Midrange</option>
                                <option value = "Control_Driver">Control Driver</option>
                                <option value = "Distance_Driver">Distance Driver</option>
                        </select>
        </div>
        <div>Disc Stability: <select name = "discstability" required>
                                <option value =""></option>
                                <option value = "Very_Understable">Very Understable</option>
                                <option value = "Understable">understable</option>
                                <option value = "Stable">Stable</option>
                                <option value = "Overstable">Overstable</option>
                                <option value = "Very_Overstable">Very Overstable</option>
                        </select>
        </div>
        <div>Disc Bead: <select name = "discbead" required>
                            <option value =""></option>
                            <option value = "Beadless">Beadless</option>
                            <option value = "Microbead">Microbead</option>
                            <option value = "Bigbead">Bigbead</option>
                        </select>
        </div>
        <div>Disc Description: <textarea name = "discdescription" cols = "64" rows = "5"></textarea></div>
        <button type = "submit" name ="Add_Inventory"> Submit </button> 
    </form>
    <br/>
    </div>
    <div id="pageFooter"></div>
</div>
</body>
</html>