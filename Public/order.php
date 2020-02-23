<?php 
  include("includes/public_header.php");
?>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('flower_img/mnmn.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3 text-primary">Order Now</h1>
              <p>We offer you the best quality roses</p>
              <p><a href="contact.php" class="btn btn-primary">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


  
    

   <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">Our Products</span>
            <h2 class="serif">Order Now</h2>
          </div>
        </div>
       
        <div class="row">
           <?php 
              $query = "SELECT * FROM product WHERE category_id={$_GET['category_id']}";
              $result= mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col-lg-4 col-md-6 mb-4'>
                    <div class='post-entry-1 h-100'>
                    <a href='single.php?product_id={$row['product_id']}'>";
                echo "<img src='admin/upload/{$row['pro_image']}' alt='Image'
                 class='img-fluid'></a>";
                echo "<div class='post-entry-1-contents'>
                
                <h2><a href='single.php?product_id={$row['product_id']}'>{$row['pro_name']}</a></h2>
                <span class='meta d-inline-block mb-3'> <h2>$ {$row['pro_price']}</h2></span>";
                echo "
                </div>
                </div>
                </div>";


            }
            ?>
      
        </div>

        
       <!--  <div class="col-12 mt-5 text-center">
          <span class="p-3">1</span>
          <a href="#" class="p-3">2</a>
          <a href="#" class="p-3">3</a>
          <a href="#" class="p-3">4</a>
        </div> -->
        
      </div>
    </div> <!-- END .site-section -->
    
    
<?php 
  include("includes/public_footer.php");
?>
