<?php 
 	include("includes/public_header.php");
  if (!isset($_SESSION['customer_id'])) {
        echo "<script> window.top.location='order.php'; </script>";
        exit();
    }
    if (isset($_SESSION['customer_id']) && isset($_GET['customer_id'])) {
        
        $query = "INSERT INTO orders(order_date,customer_id) VALUES ('$date',{$_SESSION['customer_id']})";
        $result = mysqli_query($conn,$query);
        echo "<script> window.top.location='end_page.php'; </script>";
        
        
    }
 ?>
  <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('flower_img/newpro.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="d-block mb-3 text-white" data-aos="fade-up">Thank<span class="mx-2 text-primary">&bullet;</span>You</span>
              <?php
              $date = date('d-m-Y');
                $query  =" SELECT * FROM orders";
                $result = mysqli_query($conn,$query);
                $row    = mysqli_fetch_assoc($result);
                        
                echo "<h2 class='d-block mb-3 text-white' data-aos='fade-up'>Your Order ID Is : "."{$row['order_id']} </h2>";
                echo "<h6 class='d-block mb-3 text-white'>Order Date : ". $date."</h6>";
                    ?>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  
 <?php 
 	include("includes/public_footer.php");
 ?>