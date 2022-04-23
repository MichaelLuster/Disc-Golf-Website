<?php 
include "connect_to_mysql.php";

$product_List = "";
$sql = mysqli_query("SELECT *FROM INVENTORY");
$num_rows = mysqli_num_rows($sql);
if($num_rows > 0){
    while($row = mysqli_fetch_array($sql)){
        $id=$row["ID"];
        $DiscName=$row["DiscName"];
        $DiscManufacturer=$row["DiscManufacturer"];
        $DiscPlastic=$row["DiscPlastic"];
        $product_List = "$id." ".$DiscName." ".$DiscManufacturer." ".$DiscPlastic<br/>";
    }
}else{
    $product_List = "You have no products listed";
}
?>