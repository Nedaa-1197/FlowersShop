<?php
	session_start();
	// unset for admin_id just , to dont lose other data 
	session_destroy();
	header("location:login_register.php");
?>