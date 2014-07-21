<?php
	session_start();

	unset($_SESSION["CustomerID"]);
	
	header("location:index.php");
	
	exit;
?>