<?php

	include("../includes/connection.php");
	//to DELETE from database
	$query = "DELETE FROM admin WHERE admin_id={$_GET['admin_id']}";
	mysqli_query($conn,$query);
	//when it deleted go to the manage page
	header("location:manage_admin.php");
	?>