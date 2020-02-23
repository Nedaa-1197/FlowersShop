<?php 
	include('config.php');
	//fetch data from web
	$conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
	//check the connection
	if(!$conn){
		die("cannot connect to server");
	}

?>
