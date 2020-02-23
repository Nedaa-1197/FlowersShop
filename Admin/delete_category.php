<?php

	include("../includes/connection.php");
	// To delete image from folder
	$query_folder = "SELECT * FROM category WHERE category_id={$_GET['category_id']}";
	$result       = mysqli_query($conn,$query_folder);
	$row          = mysqli_fetch_assoc($result);
	unlink("upload/{$row['category_image']}");
	//to DELETE from database
	$query        = "DELETE FROM category WHERE category_id={$_GET['category_id']}";
	mysqli_query($conn,$query);
	//when it deleted go to the manage page
    echo '<script>window.top.location="manage_category.php"</script>'; 
	?>