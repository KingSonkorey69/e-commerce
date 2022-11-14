<?php
include_once "./crud.php";

$crud = new Crud();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- navbar google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@500&family=Roboto+Condensed:wght@300&family=Roboto+Serif:wght@500&display=swap"
        rel="stylesheet"> 
    <!-- end of navbar fonts -->
    <!-- first section font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@500&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet">
    <!-- end if first section font -->
    <!-- javacsript slide -->
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
    </script>

    <!-- slides -->
</head>

<body>
    <!-- navbar -->
    <section class="navbar">
        <!-- Toolbar -->
        <div class="toolbar" role="banner">
       
        </div>
        <div class="text1">
        <span class="logoname">ARFLAIR</span>
        </div>
        <div class="right_texts">
            <a href="page.php">Rental</a>
             <!--  cart modal  -->
  <div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">$0</span>
              <button class="purchase-btn">PURCHASE</button>
        </div>
      </div>
    </div>
<!--   end of cart modal -->
        </div>
        <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
    </section>
    <!-- end navbar -->
     <!-- Slideshow container -->
     <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="./assets/images/art-6260031.jpg" style="width:100%">
  <img class="mySlides" src="./assets/images/images.jpg" style="width:100%">
  <img class="mySlides" src="./assets/images/purpose-of-design.jpg" style="width:100%">
</div>

    <!-- 
    Start of the second section
 -->
    <section class="second_section">
        <div class="items">
            <div class="hr_r"></div>
            <div class="title_house">
                <h2>Purchase</h2>
            </div>
            <div class="hr"></div>
        </div>
        <!-- <div class="img_detail"> -->
        <div class="middle">
            <?php foreach ($crud->getImages('store_info') as $key => $value) : ?>
                <!-- <a href="get_data.php?q="> -->
                    <div class="paragraph card">
                        <img class="book" src="./assets/images/<?php echo $value['store_image']; ?>">
                        <p><?php echo $value['store_title']; ?></p>
                        <p class="product-price"><?php echo $value['store_price']; ?></p>
                        <button class="add-to-cart">Add to cart</button>
                        <!-- <span class="cd-cart__select">
                        <select class="reset" id="cd-product-productId" name="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select> -->
                    </div>
                </a>
            <?php
            endforeach;
            ?>


        </div>

    </section>
  


    <!-- the footer -->
    <section class="footer">
        <div class="links">
            <div class="title">
                <h1>Links</h1>
            </div>
            <a href="http://">Home</a>
            <a href="http://">About</a>
            <a href="http://">Contact</a>
        </div>
        <div class="contact_footer">
            <div class="title">
                <h1>Contact</h1>
            </div>
            <span>Kiserian, Kajiado</span>
            <span>0702129493</span>
            <span>P.O Box 241-00100</span>

        </div>
        <div class="social_links"> 
            <div class="title">
                <h1>Social Media</h1>
            </div>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-envelope"></i>
            <i class="fa fa-twitter"></i>
        </div>

    </section>
    <div class="hrs"></div>
    <footer id="footer">
        <div class="container" id="container">
            <div class="copyright">
              &copy; Copyright <strong><span>Rental Website</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
             
              Designed by <a href="#container">Samuel Kimotho Githinji</a>
            </div>
          </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>