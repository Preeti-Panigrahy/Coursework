<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PizzaCorner</title>
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
        margin-left:-50px;
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
          margin-left: 350px;
        }
      }

    </style>
</head>

<body>
    <?php
        include 'connection/to_database.php'
    ?>
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
<!------------------------------------HomePage--------------------------------------->
    <div class="container">
        <a href="#Deals">
            <div class="categories">
                <img src="images/deals.jpg" alt="" class="itemImage">
                <div class="imageTitle">Deals</div>
            </div>
        </a>
        <a href="#Veggis">
            <div class="categories">
                <img src="images/veggis.jpg" class="itemImage">
                <div class="imageTitle">Veggis</div>
            </div>
        </a>
        <a href="#BlockBlaster">
            <div class="categories">
                <img src="images/vegPizza1.jpg" class="itemImage">
                <div class="imageTitle">Block Blaster</div>
            </div>
        </a>
        
    </div>

<!-----------------------------------DealsPage--------------------------------------->
    <div class="dealsContainer" id="Deals">
        <div class="home">
            <div class="title">DEALS</div>
        </div>
        <div class="deal">
            Save 25% on minimum purchase of $100 on Today's Special<br>
            <button class="couponBtn">Add Coupon</button>
        </div>
        <div class="deal">
            Save 15% on minimum purchase of $120 of Veggis<br>
            <button class="couponBtn">Add Coupon</button>
        </div>
        <div class="deal">
            Save 20% on minimum purchase of $130 of BlockBlaster<br>
            <button class="couponBtn">Add Coupon</button>
        </div>
    </div>

<!-----------------------------------VeggisPage-------------------------------------->
    <div class="dealsContainer" id="Veggis">
        <div class="home">
            <div class="title">VEGGIES</div>
        </div>
        <?php
            $sql = "SELECT * FROM `pizzaitems` where category='veggis'";
            $res = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
                echo'<div class="items">
                        <div class="images">
                            <img src="data:image/jpg;base64,'.base64_encode( $row['pizzaImg'] ).'" class="itemImageSize">
                        </div>
                        <div class="description">
                            <b>'.$row['pizzaName'].'</b>
                            <div class="itemSelect">
                                Price : &#163; '.$row['Amt'].'
                            </div>
                            <label>Qty:</label>
                            <select class="itemSelect">
                                <option>1</option>
                                <option>2</option>
                                <option>5</option>
                                <option>10</option>
                            </select><br>
                            <button class="buynowBtn"><a href="/PizzaOrderWebsite2/connection/order.php?id='.$row['id'].'&amt='.$row['Amt'].'">Order Now</a></button>
                        </div>
                    </div>';
            }
        ?>
    </div>


<!------------------------------------BlockBlasterPage------------------------------->
    <div class="dealsContainer" id="BlockBlaster">
        <div class="home">
            <div class="title">Block Blaster</div>
        </div>
        <?php
            $sql = "SELECT * FROM `pizzaitems` where category='blockBlaster'";
            $res = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
                echo'<div class="items">
                        <div class="images">
                            <img src="data:image/jpg;base64,'.base64_encode( $row['pizzaImg'] ).'" class="itemImageSize">
                        </div>
                        <div class="description">
                            <b>'.$row['pizzaName'].'</b>
                            <div class="itemSelect">
                                Price : &#163; '.$row['Amt'].'
                            </div>
                            <label>Qty:</label>
                            <select class="itemSelect">
                                <option>1</option>
                                <option>2</option>
                                <option>5</option>
                                <option>10</option>
                            </select><br>
                            <button class="buynowBtn"><a href="/PizzaOrderWebsite2/connection/order.php?id='.$row['id'].'&amt='.$row['Amt'].'">Order Now</a></button>
                        </div>
                    </div>';
            }
        ?>
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