<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PizzaCorner - ContactUs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

<style>
      .notLogin{
        margin-left:440px;
        height: 150px;
      }
      .notLogin h4{
        color:#000; 
        font-size:40px;
        padding-top:20px;
        margin-left:-50px"
      }
      #dis{
        display: none;
      }
      .menu3 ul a{
        display: block;
        background-color: #000;
      }
      @media screen and (max-width: 500px) {
        .notLogin h4{
          margin-left: -350px;
        }
      }

    </style>
</head>

<body>
    <!-------------------------------------NavBar---------------------------------------->
    <div class="home">
        <div class="pageTitle">Pizza Corner
            <a type="button" id="showT" onclick="showT()"><img src="images/hamburger.png" class="menuIcon"></a>
        </div>
</div>
    <div class="menu" id="fixed">
        <ul class="menuItems">
            <a href="/PizzaOrderWebsite2/" class="aMenu"><li>Home</li></a>
            <a href="/PizzaOrderWebsite2/about.php" class="aMenu"><li>About Us</li></a>
            <a href="/PizzaOrderWebsite2/contact.php" class="aMenu"><li>Contact Us</li></a>
            
            <?php
                if(isset($_SESSION['loggedin'])){
                    echo'<a href="/PizzaOrderWebsite2/connection/for_logout.php" class="aMenu"><li>Logout</li></a>';
                }
                else{
                    echo'<a href="/PizzaOrderWebsite2/login.php" class="aMenu"><li>Login</li></a>
                    <a href="/PizzaOrderWebsite2/signup.php" class="aMenu"><li>Sign Up</li></a>';
                }
            ?>
            
            <a href="/PizzaOrderWebsite2/mycart.php" class="aMenu"><li>Cart</li></a>
        </ul>
        <div class="searchBox">
            <form>
                <input type="text" placeholder="Search..." name="search" class="searchInput">
                <button type="submit"><img src="images/search.png" width="30px"></button>
            </form>
        </div>
    </div> 
    <div class="menu3" id="fixed">
        <ul id="dis" class="menuItems">
            <a href="/PizzaOrderWebsite2/" class="aMenu">
                <li>Home</li>
            </a>
            <a href="/PizzaOrderWebsite2/about.php" class="aMenu">
                <li>About Us</li>
            </a>
            <a href="/PizzaOrderWebsite2/contact.php" class="aMenu">
                <li>Contact Us</li>
            </a>

            <?php
                if(isset($_SESSION['loggedin'])){
                    echo'<a href="/PizzaOrderWebsite2/connection/for_logout.php" class="aMenu"><li>Logout</li></a>';
                }
                else{
                    echo'<a href="/PizzaOrderWebsite2/login.php" class="aMenu"><li>Login</li></a>
                    <a href="/PizzaOrderWebsite2/signup.php" class="aMenu"><li>Sign Up</li></a>';
                }
            ?>

            <a href="/PizzaOrderWebsite2/mycart.php" class="aMenu">
                <li>Cart</li>
            </a>
        </ul>
    </div>  

<!----------------------------------ContactUs------------------------------------------->
    <div class="contactSection">
      <h1>Contact Us</h1>
      <div class="contactBox"></div>
      <form class="contactForm">
        <input type="text" class="contactFormText" placeholder="Your name">
        <input type="email" class="contactFormText" placeholder="Your email">
        <input type="text" class="contactFormText" placeholder="Your phone">
        <textarea class="contactFormText" placeholder="Your message"></textarea>
        <input type="submit" class="contactFormBtn" value="Send">
      </form>
    </div>
      


<!----------------------------------Footer------------------------------------------->
<div class="home1">
    <div class="footer">
        <div class="quickLinks">
            <div>Location:</div>
            <ul>
                <li><a href="#" class="aLinks">67 Freezeland Lane,</a></li>
                <li><a href="#" class="aLinks">Garstang</a></li>
                <li><a href="#" class="aLinks">United Kingdom</a></li>
            </ul>
        </div>
        <div class="quickLinks">
            <div>Careers</div>
            <ul>
                <li><a href="/PizzaOrderWebsite2/about.php" class="aLinks">About Us</a></li>
                <li><a href="#" class="aLinks">FAQs</a></li>
                <li><a href="#" class="aLinks">Help</a></li>
            </ul>
        </div>
        <div class="quickLinks">
            <div>Quick Links</div>
            <ul>
                <li><a href="/PizzaOrderWebsite2/contact.php" class="aLinks">Contact Us</a></li>
                <li><a href="/PizzaOrderWebsite2/login.php" class="aLinks">Login</a></li>
                <li><a href="/PizzaOrderWebsite2/signup.php" class="aLinks">Sign Up</a></li>
            </ul>
        </div>
    </div>
</div> 
<div class="copyright">
    Copyright &#169; 2020 | All rights reserved | PizzaCorner
</div>  
<script src="js/script.js"></script>
</body>
</html>