<?php 
  include("includes/public_header.php");
 
?>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('flower_img/back99.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="d-block mb-3 text-white" data-aos="fade-up">Be Happy <span class="mx-2 text-primary">&bullet;</span> Its Made By Love</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Single Box Page</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light">
      <div class="container">
        <div class="row">
          
             <?php 
              $query = "SELECT * FROM product WHERE product_id={$_GET['product_id']}";
              $result= mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($result)){
                echo '<div class="col-md-6 blog-content">
            <div class="pt-5">';
                echo "<div class='col-lg-5 col-md-5 mb-4'>
                    <div class='post-entry-1 h-100'>
                    <a href='single.php?product_id={$row['product_id']}'>";
                echo "<img src='admin/upload/{$row['pro_image']}' alt='Image' height=400px width=400px
                 ></a>";
                echo "<div class='post-entry-1-contents bg-light'>";
                echo "
                </div>
                </div>
                </div>
          ";
          echo ' </div>
      </div>';
          echo "<div class='col-md-6 sidebar'><div class='sidebar-box bg-light pt-5'>
              
              ";
              echo "<h2><a>{$row['pro_name']}</a></h2>
              <p>Box price is $ {$row['pro_price']}</p>";
              echo "<h2 class='text-black'>Product Description</h2><p>{$row['pro_desc']}</p>";
            // new qty and cart message.
              echo "<form action='add_cart.php?product_id={$row['product_id']}' method='post'>
              <span class='meta d-inline-block mb-3'><input type='submit' value='Add To Cart' class='btn btn-primary' name='addtocart'></span></form>
              </div></div></div>";
             }
          ?> 
      
       
    </div>
    </div>
    </div>
    
<?php 
  include("includes/public_footer.php");
?>

