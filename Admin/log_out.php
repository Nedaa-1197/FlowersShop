<?php
	session_start();
	// unset for admin_id just , to dont lose other data 
	session_unset($_SESSION['admin_id']);
	header("location:log_in.php");
?>