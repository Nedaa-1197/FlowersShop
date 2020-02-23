<?php 
include('../includes/connection.php');
//the action will start if user press on button
if(isset($_POST['update'])){
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    //udate data
    $query = "UPDATE admin SET name = '$name', email ='$email' , password = '$password' WHERE admin_id = {$_GET['admin_id']}";
    //perform query
    mysqli_query($conn,$query);
    header("location:manage_admin.php");
    
} 
    
    //fetch old data form database
    $query  = "select * from admin where admin_id={$_GET['admin_id']}";
    $result = mysqli_query($conn,$query);
    $row    = mysqli_fetch_assoc($result);

include('../includes/header.php');
 ?>
<section class="content">
        <div class="container-fluid">
        	
            <div class="block-header">
                <h2>Manage Admin</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                Edite Admin
                            </h1>
                            
                        </div>
                        <div class="body">
                            <form method="post">
                            	<label for="admin_name">Admin Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="admin_name" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $row['name'] ?>">
                                    </div>
                                </div>
                                <label for="email_address">Email Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="email" class="form-control" placeholder="Enter your email address" value="<?php echo $row['email'] ?>">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $row['password'] ?>">
                                    </div>
                                </div>
                                
                                		
                                <button name="update" class="btn btn-primary m-t-15 waves-effect">Update Admin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>