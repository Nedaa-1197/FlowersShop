<?php 
include('../includes/connection.php');
//the action will start if user press on button
if(isset($_POST['edit_pro'])){
    $pro_name     = $_POST['pro_name'];
    $pro_price   = $_POST['pro_price'];
    $pro_desc   = $_POST['pro_desc'];
    $category_id = $_POST['category_id'];
    $pro_image   = $_FILES['pro_image']['name'];
    $tmp_name    = $_FILES['pro_image']['tmp_name']; 
    $path        = "upload/";
    move_uploaded_file($tmp_name, $path.$pro_image);
    //udate data
     if ($_FILES['pro_image']['error']==0) {
        $query = "UPDATE product SET pro_name = '$pro_name',pro_price='$pro_price',pro_desc='$pro_desc',category_id='$category_id' , pro_image = '$pro_image' WHERE product_id = {$_GET['product_id']}";
    }else{
        $query="UPDATE product SET pro_name ='$pro_name' ,pro_price='$pro_price',pro_desc='$pro_desc',category_id='$category_id', pro_image = '$pro_image' WHERE product_id = {$_GET['product_id']}";
    }

   /* echo "$query";
    die;*/
    //perform query
    mysqli_query($conn,$query);
    header("location:manage_product.php");

/*    echo '<script>window.top.location="manage_product.php"</script>';
*/    exit;
    
} 
    
    //fetch old data form database
    $query  = "SELECT * FROM product WHERE product_id={$_GET['product_id']}";
    $result = mysqli_query($conn,$query);
    $row    = mysqli_fetch_assoc($result);

include('../includes/header.php'); ?>
<section class="content">
        <div class="container-fluid">
        	
            <div class="block-header">
                <h2>Manage Product</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                New Product
                            </h1>
                            
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                            	<label for="admin_name">Product Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="admin_name" name="pro_name" class="form-control" value="<?php echo $row['pro_name'] ?>">
                                    </div>
                                </div>
                                <label for="email_address">Product Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="price" name="pro_price" class="form-control" value="<?php echo $row['pro_price'] ?>">
                                    </div>
                                </div> 
                                <label for="email_address">Product description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="price" name="pro_desc" class="form-control" value="<?php echo $row['pro_desc'] ?>">
                                    </div>
                                </div>
                                <label for="password">Product Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="image" name="pro_image" class="form-control" value="<?php echo $row['pro_image'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                        <select  id="select" class="form-control" name="category_id" required >
                                            <option >Please select</option>
                                           <?php 

                                            $query = "SELECT * FROM category";
                                            $result= mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                                //to check the category if it selected
                                                if ($_GET['category_id']==$row['category_id']) {
                                                     echo "<option selected value='{$row['category_id']}'>{$row['category_name']}</option>"; 
                                                }else{
                                                echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>"; 
                                            }}
                                            ?>
                                        </select> 
                                    </div>
                                
                                		<br>
                                <button name="edit_pro" class="btn btn-primary m-t-15 waves-effect">Update Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>