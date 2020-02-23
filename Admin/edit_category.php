<?php 
include('../includes/connection.php');
include('../includes/header.php');
//the action will start if user press on button
if(isset($_POST['update_category'])){
    $category_name   = $_POST['category_name'];
    //Get data from files
    $category_image  = $_FILES['category_image']['name'];
    $tmp_name   = $_FILES['category_image']['tmp_name'];    
    $path       = "upload/";
    move_uploaded_file($tmp_name, $path.$category_image);
    //udate data
    if ($_FILES['category_image']['error']==0) {
        $query = "UPDATE category SET category_name = '$category_name',category_image='$category_image' WHERE category_id = {$_GET['category_id']}";
    }else{
        $query="UPDATE category SET category_name ='$category_name' WHERE category_id{$_GET['category_id']}";
    }
    
    
    //perform query
    mysqli_query($conn,$query);
    echo '<script>window.top.location="manage_category.php"</script>'; 
    exit;    
} 
    
    //fetch old data form database
    $query  = "SELECT * FROM category WHERE category_id={$_GET['category_id']}";
    $result = mysqli_query($conn,$query);
    $row    = mysqli_fetch_assoc($result);

 ?>

<section class="content">
        <div class="container-fluid">
        	
            <div class="block-header">
                <h2>Manage Category</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                New Category
                            </h1>
                            
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                            	<label for="admin_name">Ctegory Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="category_name" name="category_name" class="form-control" value="<?php echo $row['category_name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                 <label for="cc-payment" class="control-label mb-1">Ctegory Image</label>
                                  <input id="cc-pament" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['category_image'] ?>">
                                  </div> 
                               
                                
                                		
                                <button name="update_category" class="btn btn-primary m-t-15 waves-effect">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>