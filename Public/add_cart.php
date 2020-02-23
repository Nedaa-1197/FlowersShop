<?php 
  include("includes/public_header.php");
?>
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('flower_img/cart2.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3 text-primary">My Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="site-section bg-black about-me">
     <div class="container">
       <div class="row align-items-center">
       <div class="col-12 text-center"><h3 class="text-white mb-5">Your Order</h3></div>
       	<?php 
               $price=0;
               if(isset($_SESSION['product_id']) && count($_SESSION['product_id'])>0){
                foreach ($_SESSION['product_id'] as $pro_id) {
                    $query = "SELECT * FROM product WHERE product_id = $pro_id";

                    $result=mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    	echo '<div class="col-md-4 ml-auto">';
                    	echo "<img src='admin/upload/{$row['pro_image']}' class='img-fluid'>";
                    	echo "<p>{$row['pro_name']}</p>";
                    	echo "<p>$ {$row['pro_price']}</p></div>";
                    	
                    	$price+=$row['pro_price'];

                        }
                    }
                };

                ?> 

                <div class="col-12 text-center">   
                <?php echo	"<div><p>Total Price : $ $price<p></div> " ;?>
                <span class='meta d-inline-block mb-3'><h3><a href='make_order.php' class='btn btn-primary' name='make_btn'>Make Order</a></h3></span>    </div>        
       </div>
     </div>
   </div>





<?php 
 	include("includes/public_footer.php");
 ?>