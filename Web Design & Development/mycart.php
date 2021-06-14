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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
    <?php
      include 'css/style.css';
    ?>
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
      .home{
        background-image: url('images/background.webp');
      }
      .home1{
        background-image: url('images/footer-background.jpg');
      }
      .buynowBtn{
        margin-top: -180px;
        margin-bottom: 30px;
        margin-left: 540px;
        height: 40px;
      }
      @media screen and (max-width: 500px) {
        .notLogin{
          height: 238px;
          margin-left:360px;
        }
        .notLogin h4{
          margin-left: -350px;
        }
        .buynowBtn{
          margin-left: 160px;
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

    <!-----------------------------------------MyCart-------------------------->

    <?php
      if(isset($_SESSION['loggedin'])){
        include 'connection/to_database.php';
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `login` where email_id='$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $sql1 = "SELECT * FROM `mycart` where customerId='$id' and delivered=0";
        $result1 = mysqli_query($conn,$sql1);
        $num = mysqli_num_rows($result1);
        if($num>0){
          echo'<div class="myCart start">
              <div class="cartTitle">
                YOUR CART
              </div>';
          $inc = 1;
          while($row1 = mysqli_fetch_assoc($result1)){
            $itemId = $row1['pizzaItemId'];
            $sql2 = "SELECT * FROM `pizzaitems` where id=$itemId";
            $result2 = mysqli_query($conn,$sql2);
            $row3 = mysqli_fetch_assoc($result2);
            echo'<div class="cartItem">
                    <div class="cartButtons">
                      <span class="deleteBtn"></span>
                      <span class="likeBtn"></span>
                    </div>
                    <div class="cartImage">
                      <img src="data:image/jpg;base64,'.base64_encode( $row3['pizzaImg'] ).'">
                    </div>
                    <div class="cartDescription">
                      <span>'.$row3['pizzaName'].'</span>
                      <span class="actual">Price : &#163; '.$row3['Amt'].'</span>
                      <span><a href="/PizzaOrderWebsite2/connection/delete.php?id='.$itemId.'&cust='.$id.'">Remove</a></span>
                    </div>
                    <div class="cartQuantity">
                      <button id="plusBtn" class="plusBtn" type="button" onclick="increase('.$inc.')" name="button">
                        <img src="images/plus.png">
                      </button>
                      <input type="text" class="num" name="name" value="1">
                      <button id="minusBtn" class="minusBtn" type="button" onclick="decrease('.$inc.')" name="button">
                        <img src="images/minus.png">
                      </button>
                    </div>
                    <div id="cartTotalPrice" class="cartTotalPrice">&#163; '.$row3['Amt'].'</div>
                  </div>';
                  $inc = $inc + 1;
          }
          echo'</div>
              <div class="myCart cartTotalBuy">
                <div class="cartTitle">
                  ORDER SUMMARY
                </div>
                <table>
                  <tr>
                    <td>Total:</td>
                    <td></td>
                    <td id="total1">&#163; 75.00</td>
                  </tr>
                  <tr>
                    <td>Extras:</td>
                    <td></td>
                    <td>&#163; 0.00</td>
                  </tr>
                  <tr>
                    <td>GRAND TOTAL:</td>
                    <td></td>
                    <td id="total2">&#163; 75.00</td>
                  </tr>
                </table>
                <div class="note">Thanks! Do Visit Again! Have a Nice day</div>
              </div>
              <form method="GET" action="/PizzaOrderWebsite2/connection/final.php"> 
                <button type="submit" class="buynowBtn" onclick="done()">Place Order</button>
              </form>';  
        }
        else{
          echo'<div class="notLogin">
                  <h4>Your Cart is Empty</h4>
                </div>';
        }
      }
      else{
          echo'<div class="notLogin">
                <h4>To view this area, Please login first</h4>
              </div';
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
    <?php
    echo'<script src="js/for_cart.js"></script>
    <script src="js/script.js"></script>';
    ?>
</body>

</html>