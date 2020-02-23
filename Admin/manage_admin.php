<?php 
include('../includes/connection.php');
include("../includes/header.php");

//the action will start if user press on button
if(isset($_POST['submit'])){
	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO admin(name,email,password) VALUES('$name','$email','$password')";

	//perform query
	mysqli_query($conn,$query);
    //stop inserting data in the database when refreshing the page
     echo '<script>window.top.location="manage_admin.php"</script>'; 
    exit;

}

?>
<!-- Vertical Layout | With Floating Label -->
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
                                New Admin
                            </h1>
                            
                        </div>
                        <div class="body">
                            <form method="post">
                            	<label for="admin_name">Admin Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="admin_name" name="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <label for="email_address">Email Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="email" class="form-control" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>
                                
                                		
                                <button name="submit" class="btn btn-primary m-t-15 waves-effect">Add Admin</button>
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
                                Admins
                               
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Edite</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                           //to Read from database
                                            $query     = "SELECT * FROM admin";
                                            $result    = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$row['admin_id']}</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                echo "<td><a href='edit_admin.php?admin_id={$row['admin_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_admin.php?admin_id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";
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
