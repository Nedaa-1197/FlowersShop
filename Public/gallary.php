<?php 
 	include("includes/public_header.php");
 ?>
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('flower_img/back9.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Gallary</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

 <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">Gallary</span>
            <h2 class="serif">See My Works</h2>
          </div>
        </div>
       
        <div id="posts" class="row no-gutter">
          
          	 <?php 
              $query = "SELECT * FROM gallary";
              $result= mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($result)){
              	echo '<div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">';
              	echo "<a href='admin/upload/{$row['gallary_image']}' class='item-wrap' data-fancybox='gal'>";
              	echo '<span class="icon-search2"></span>';
              	echo "<img class='img-fluid' src='admin/upload/{$row['gallary_image']}'></a></div>";
              }?>
   
          
          
        </div>
      </div>
    </div>
 <?php 
 	include("includes/public_footer.php");
 ?>