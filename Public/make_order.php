  <?php 
   	include("includes/public_header.php");
      if (!isset($_SESSION['customer_id'])) {
     echo '<script>window.top.location="login_register.php"</script>';             
   }
   ?>
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('flower_img/cart.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="container">
        <div class="row">     
    <div class="col-md-6 blog-content">
   <div class="pt-5">
      <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">MAKE ORDER</h3>
                  <form action="#" class="" method="post">
                    <!--  
                    <div class="form-group">
                      <label for="email">Quantity *</label>
                      <input type="integer" class="form-control" id="email" name="quantity">
                    </div> -->
                    <div class="form-group">
                      <label for="name">Counrty *</label>
                    <input type="text" class="form-control" id="name" name="country" required>
                    </div> 
                    <div class="form-group">
                      <label for="name">City *</label>
                    <input type="text" class="form-control" id="name" name="city" required>
                    </div> 
                    <div class="form-group">
                      <label for="name">Street *</label>
                    <input type="text" class="form-control" id="name" name="street" required>
                    </div> 
                    <div class="form-group">
                      <label for="name">Building *</label>
                    <input type="text" class="form-control" id="name" name="building" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Make Order" name="make_btn" class="btn btn-primary btn-md text-white">
                       <?php 
                              if (isset($_POST['make_btn'])) {
                                $country = $_POST['country'];
                                $city = $_POST['city'];
                                $street = $_POST['street'];
                                $building = $_POST['building'];
                                $query = "INSERT INTO addresses(country,city,street,building) VALUES('$country','$city','$street','$building')";    
                                /*print_r($query);
                                die;
                                  */
                                mysqli_query($conn ,$query);
                                echo "<script>window.top.location='end_page.php'</script>";
                              }
                           ?>
                    </div>

                  </form>
                </div>
                </div>
                </div>

             
                </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      
   <?php 
   	include("includes/public_footer.php");
   ?>