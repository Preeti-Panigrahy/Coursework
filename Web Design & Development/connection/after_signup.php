<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'to_database.php';
    $emailId = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['cpassword'];
    $sql1 = "SELECT * FROM `login` WHERE email_Id='$emailId'";
    $result1 = mysqli_query($conn,$sql1);
    $num = mysqli_num_rows($result1);
    if($num==0 && $password==$confirm){
        $sql = "INSERT INTO `login` (`id`, `email_Id`, `password`, `TimeCreated`) VALUES (NULL, '$emailId', '$password', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:/PizzaOrderWebsite2/signup.php?success='true'");
        }
        else{
            echo'error';
        }
            
    }
    else{
        header("location:/PizzaOrderWebsite2/signup.php?error='true'");
        }   
    }
?>