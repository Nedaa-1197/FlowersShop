<?php 
  include("includes/public_header.php");
?>
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('flower_img/back4.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3 text-primary">We offer you the best quality roses ...</h1>
              <p>With the Flowers Box, we aim to give a very simple and quality form to the traditional flower sector. Thanks to this transformation; We aim to serve unforgettable memories by combining Flowers Box stylish presentation style with the roses, which have been used for centuries and still have no effect but which are the simplest and most effective way of expressing emotions. We believe that this simple and sincere presentation is the most effective method of our time.</p>
              <p><a href="contact.php" class="btn btn-primary">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="site-section bg-black about-me">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 mb-5 mb-md-0">
           <img src="flower_img/back2.jpg" alt="Image" class="img-fluid">
         </div>
         <div class="col-md-5 ml-auto">
           <h3 class="text-white mb-5">Follow Us</h3>
           <blockquote class="quote-29281">
            <p>You can follow Flowers Box in Facebook , Instagram and Twitter. You can contact us for your product orders made up of different combed roses.
            </p>
           </blockquote>
           
           

           <div class="social_29128 white mt-5">
            <a href="https://www.facebook.com/"><span class="icon-facebook"></span></a>  
            <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>  
            <a href="https://www.twitter.com/"><span class="icon-twitter"></span></a>  
           </div>
         </div>
       </div>
     </div>
   </div>
  


    <div class="site-section bg-white">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">OUR</span>
            <h2 class="serif">PRODUCTS</h2>
          </div>
        </div>

        <div class="row">
          <?php 

              $query = "SELECT * FROM category";
              $result= mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($result)){
                echo '<div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">';
                echo " <a href='admin/upload/{$row['category_image']}' class='item-wrap' data-fancybox='gal'>
                  <img class='img-fluid' src='admin/upload/{$row['category_image']}'>
                  </a>";
                  echo '<div class="post-entry-1-contents">';
                  echo " <h2><a href='order.php?category_id={$row['category_id']}'>{$row['category_name']}</a></h2>
                      </div></div></div>";
              }
              ?>
        </div>
      </div>
    </div>

    <?php 
      include("includes/public_footer.php");
      ?>

