
<?php
session_start();

if($_SESSION['manager'] == "")
    header('location: AdminLogIn.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
</head>
<body>
<div align ="center" id = "mainWrapper">
    <?php include_once("../template_header.php");?>
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
                    $product_List = "";
                    include '../server.php';
                    $sql = "SELECT * FROM INVENTORY";
                    $result = mysqli_query($conn, $sql);
                    $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){
                        while($row = mysqli_fetch_array($result)){
                            $id=$row["ID"];
                            $discpicture =$row['DISCPICTURE'];
                            $disctourseries =$row['DISCTOURSERIES'];
                            $discname=$row["DISCNAME"];
                            $discmanufacturer=$row["DISCMANUFACTURER"];
                            $discplastic=$row["DISCPLASTIC"];
                            $product_List = $id." ".$discpicture." ".$disctourseries." ".$discname." ".$discmanufacturer." ".$discplastic."<br/>";
                            echo $product_List;
                        }
                    }else{
                        $product_List = "You have no products listed";
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
    <form action="Inventory_List.php" method = "post" enctype="multipart/form-data">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>Tour Series Name (if none leave blank)</td>
                <td><input name="disctourseries" type ="text" id="disctourseries" size="255"></td>
            </tr>
            <tr>
                <td>Run of Disc (if not appicable leave blank)</td>
                <td><input name="discrun" type ="text" id="discrun" size="255"></td>
            </tr>
            <tr>
                <td>Disc Name</td>
                <td><input name="discname" type ="text" id="discname" size="255" required></td>
            </tr>
            <tr>
                <td>Disc Manufacturer</td>
                <td><input name="discmanufacturer" type ="text" id="discmanufacturer" size="255" required></td>
            </tr>
            <tr>
                <td>Disc Plastic</td>
                <td><input name="discplastic" type ="text" id="discplastic" size="255" required></td>
            </tr>
            <tr>
                <td>Disc Speed(Type Number Only)</td>
                <td><select name="discspeed" type ="text" id="discspeed" size="255"required>
            </tr>
            <tr>
                <td>Disc Glide(Type Number Only</td>
                <td><input name="discrun" type ="text" id="discrun" size="255" required></td>
            </tr>
            <tr>
                <td></td>
                <td> <button type = "submit" name = "Add_Inventory"> Add new Inventory</button> </td>
            </tr>
        </table> 
    </form>
    <br/>
    </div>
    <div id="pageFooter"></div>
</div>
</body>
</html>