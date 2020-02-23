<?php

	include("../includes/connection.php");
	//to DELETE from database
	$query = "DELETE FROM product WHERE product_id={$_GET['product_id']}";
	mysqli_query($conn,$query);
	//when it deleted go to the manage page
	header("location:manage_product.php");
	?>