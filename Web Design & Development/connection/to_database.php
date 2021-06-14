<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pizzacorner";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry! Cannot connect to database right now");
    }

?>