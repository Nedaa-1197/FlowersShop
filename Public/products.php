<?php 
	include("includes/public_header.php");
?>
<div class="row">
           <?php 
              $query = "SELECT * FROM product";
              $result= mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col-lg-4 col-md-6 mb-4'>
                    <div class='post-entry-1 h-100'>
                   ";
                echo "<img src='admin/upload/{$row['pro_image']}' alt='Image'
                 class='img-fluid'>";
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
<?php 
	include("includes/public_footer.php");
?>