<?php
	session_start();

	unset($_SESSION["AdminID"]);
	
	header("location:index.php");
	
	exit;
?>