<?php 
include('../includes/connection.php');
include('../includes/header.php');
//the action will start if user press on button
if(isset($_POST['add_category'])){
	$category_name   = $_POST['category_name'];
    //Get data from files
    $category_image  = $_FILES['category_image']['name'];
    $tmp_name   = $_FILES['category_image']['tmp_name'];	
    $path       = "upload/";
    move_uploaded_file($tmp_name, $path.$category_image);

	
	$query = "insert into category(category_name,category_image) values('$category_name','$category_image')";
	//perform query
	mysqli_query($conn,$query);
    //stop inserting data in the database when refreshing the page
    echo '<script>window.top.location="manage_category.php"</script>'; 
    exit;

}


 
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
                                        <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group">
                                 <label for="cc-payment" class="control-label mb-1">Ctegory Image</label>
                                  <input id="cc-pament" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                  </div> 
                               
                                
                                		
                                <button name="add_category" class="btn btn-primary m-t-15 waves-effect">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Categories
                               
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Edite</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                           //to Read from database
                                            $query     = "SELECT * FROM category";
                                            $result    = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$row['category_id']}</td>";
                                                echo "<td>{$row['category_name']}</td>";
                                                echo "<td><img src='upload/{$row['category_image']}' height=200px width=200px/></td>";
                                                echo "<td><a href='edit_category.php?category_id={$row['category_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_category.php?category_id={$row['category_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                            }

                                           ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
		</div>

</section>
