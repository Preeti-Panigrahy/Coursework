<?php
include 'to_database.php';
if(!isset($_SESSION)){
    session_start();
}
$id = $_GET['id'];
$cost = $_GET['amt'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM `login` WHERE email_Id='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$custid = $row['id'];
$sql1 = "INSERT INTO `mycart` (`id`, `customerId`, `pizzaItemId`, `amtPaid`) VALUES (NULL, '$custid', '$id', '$cost')";
$result = mysqli_query($conn,$sql1);
header("location:/PizzaOrderWebsite2/");
?>