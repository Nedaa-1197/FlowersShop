<?php 
 	include("includes/public_header.php");
 ?>
  <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-color: black;">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
              <div class="container">
      <div class="row">
        <?php 
          if (isset($message)){
            echo "<div class='alert alert-danger'>$message</div>";
          }
        ?>
  <div class="col-md-6 blog-content">
 <div class="pt-5">
    <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 text-white">LOG IN</h3>
                <form action="#" class="" method="post">
                   
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="cust_email" placeholder="Enter Your Email" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Password *</label>
                  <input type="password" class="form-control" id="name" name="cust_pass" placeholder="Enter Your Password" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="LOG IN" name="login_btn" class="btn btn-primary btn-md text-white">
                     <?php 
                        if (isset($_POST['login_btn'])) {
                            $email    = $_POST['cust_email'];
                            $password = $_POST['cust_pass'];
    
                          if (!empty($email) && !empty($password)) {
                              $query = "SELECT * FROM customer WHERE cust_email='$email' AND cust_pass='$password'";
                              /*print_r($query);
                              die;*/
                              $result= mysqli_query($conn,$query);
                              $row   = mysqli_fetch_assoc($result);
                               /* print_r($row);
                                    die;*/
                          if($row['cust_email']){
                              $_SESSION['customer_id'] = $row['customer_id'];
                              echo '<script>window.top.location="make_order.php"</script>';
                          }
                          else{
                                    echo "<div class='alert alert-danger'>Please Register To Continue</div>";
                            
                              }
                          }
                                    }
                                  
                        ?>
                  </div>

                </form>
              </div>
              </div>
              </div>

              <div class="col-md-6 blog-content">
 <div class="pt-5">
    <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 text-white">REGISTER NOW</h3>
                <form action="#" class="" method="post">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="cust_name" placeholder="Enter Your Name" required>
                  </div>
                 <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="cust_email"  placeholder="Enter Your Email" required>
                  </div>
                  <div class="form-group">
                    <label for="website">Phone Number *</label>
                    <input type="text" class="form-control" id="website" name="cust_phone" placeholder="Enter Your Phone Number" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Password *</label>
                  <input type="password" class="form-control" id="name" name="cust_pass" placeholder="Enter Your Password" required>
                  </div>

                      <div class="form-group">
                    <input type="submit" value="Register" name="register_btn" class="btn btn-primary btn-md text-white">
                  <?php 
                    if (isset($_POST['register_btn'])) {
                      $email    = $_POST['cust_email'];
                      $name     = $_POST['cust_name'];
                      $mobile   = $_POST['cust_phone'];
                      $password = $_POST['cust_pass'];
                                       
                      $query = "INSERT INTO customer(cust_name,cust_email,cust_phone,cust_pass) VALUES('$name','$email','$mobile','$password')";
                                       
                      mysqli_query($conn ,$query);
                      /*$_SESSION['customer_id'] = $register['customer_id'];*/
                      echo '<script>window.top.location="login_register.php"</script>';
                      exit;
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