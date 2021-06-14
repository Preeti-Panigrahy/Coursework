<?php
include 'to_database.php';
if(!isset($_SESSION)){
    session_start();
}
$email = $_SESSION['email'];
$sql = "SELECT * FROM `login` where email_id='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$sql1 = "UPDATE `mycart` SET `delivered` = '1' WHERE `mycart`.`customerId` = $id";
$result = mysqli_query($conn,$sql1);
header("location:/PizzaOrderWebsite2/mycart.php");
?>