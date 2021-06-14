<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'to_database.php';
    $emailId = $_POST['email'];
    $Fpassword = $_POST['password'];
    $sql = "SELECT * FROM `login` WHERE email_Id='$emailId'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if($num==1 && $Fpassword==$row['password']){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$emailId;
        header("location:/PizzaOrderWebsite2/");
    }
    else{
        $_SESSION['showwrongAlert']='true';
        header("location:/PizzaOrderWebsite2/login.php?alert='true'");
    }
}
?>