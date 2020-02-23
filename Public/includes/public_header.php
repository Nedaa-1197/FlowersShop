<?php
  session_start();
  include("includes/connection.php"); 
   if (isset($_POST['addtocart'])) {
        //assoc. array to take all ids 
        $_SESSION['product_id'][] = $_GET['product_id'];
            }
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Capture &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">Flowers Box</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="products.php" class="nav-link">Products</a></li>
                  <li><a href="gallary.php" class="nav-link">Gallary</a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <!-- <li><a href="login_register.php" class="nav-link">LogIn</a></li> -->
                  <li><a href="logOut.php" class="nav-link">Log Out</a></li>
                  <li><div class="cart-area">
                    <a href="add_cart.php"><img src="images/cart2.png" height="20px" width="20px"> <span> <?php
                            if(isset($_SESSION['product_id'])){
                                echo count($_SESSION['product_id']);
                        }else{
                        echo 0;
                    }
                        ?></span></a>
                </div></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>