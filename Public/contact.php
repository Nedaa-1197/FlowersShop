<?php
  include("includes/public_header.php");
  ?>
 <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('flower_img/back.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Contact Page</h1>
                <p>Contact us for all your questions</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">Contact</span>
            <h2 class="serif">Get In Touch</h2>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="first_name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name"  name="last_name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <textarea class="form-control" placeholder="Write your message." name="message" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message" name="send_btn">
                   <?php 
                    if (isset($_POST['send_btn'])) {
                      $Fname   = $_POST['first_name'];
                      $Lname   = $_POST['last_name'];
                      $email   = $_POST['email'];
                      $message = $_POST['message'];
                                       
                      $query = "INSERT INTO contact(first_name,last_name,email,message) VALUES('$Fname','$Lname','$email','$message')";
                      mysqli_query($conn ,$query);
                    }
                  ?>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>Makkah Street, Amman, Jordan</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+962799825616</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>Flowers_Box@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div> <!-- END .site-section -->
    
    <?php
  include("includes/public_footer.php");
  ?>