<?php
include 'to_database.php';
if(!isset($_SESSION)){
    session_start();
}
$itemid = $_GET['id'];
$cust = $_GET['cust'];
$sql1 = "DELETE FROM `mycart` WHERE `mycart`.`customerId` = $cust and `mycart`.`pizzaItemId`=$itemid";
$result = mysqli_query($conn,$sql1);
header("location:/PizzaOrderWebsite2/mycart.php");
?>