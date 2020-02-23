<?php 
include('../includes/connection.php');
include('../includes/header.php');
//the action will start if user press on button
if(isset($_POST['update_gallary'])){
    //Get data from files
    $image  = $_FILES['gallary_image']['name'];
    $tmp_name   = $_FILES['gallary_image']['tmp_name'];    
    $path       = "upload/";
    move_uploaded_file($tmp_name, $path.$image);
    //udate data
    if ($_FILES['gallary_image']['error']==0) {
        $query = "UPDATE gallary SET gallary_image='$image' WHERE gallary_id = {$_GET['gallary_id']}";
    }
    
    
    //perform query
    mysqli_query($conn,$query);
    echo '<script>window.top.location="manage_gallary.php"</script>'; 
    exit;    
} 
    
    //fetch old data form database
    $query  = "SELECT * FROM gallary WHERE gallary_id={$_GET['gallary_id']}";
    $result = mysqli_query($conn,$query);
    $row    = mysqli_fetch_assoc($result);

 ?>

<section class="content">
        <div class="container-fluid">
        	
            <div class="block-header">
                <h2>Manage Gallary</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                New Image
                            </h1>
                            
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                            	
                                <div class="form-group">
                                 <label for="cc-payment" class="control-label mb-1">Image</label>
                                  <input id="cc-pament" name="gallary_image" type="file" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['gallary_image'] ?>">
                                  </div> 
                               
                                
                                		
                                <button name="update_gallary" class="btn btn-primary m-t-15 waves-effect">Update Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>