<?php

	include("../includes/connection.php");
	// To delete image from folder
	$query_folder = "SELECT * FROM gallary WHERE gallary_id={$_GET['gallary_id']}";
	$result       = mysqli_query($conn,$query_folder);
	$row          = mysqli_fetch_assoc($result);
	unlink("upload/{$row['gallary_image']}");
	//to DELETE from database
	$query        = "DELETE FROM gallary WHERE gallary_id={$_GET['gallary_id']}";
	mysqli_query($conn,$query);
	//when it deleted go to the manage page
    echo '<script>window.top.location="manage_gallary.php"</script>'; 
	?>