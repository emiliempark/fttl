<?php 
	require_once("includes/view.php");

	require_once("includes/header.php");
	require_once("includes/form.php");
	session_start();

	$oCustomer = new Customer();

	echo "Welcome".$oCustomer->FirstName ."start your journey" ;
	echo "Go to home" ;

	require_once("includes/footer.php");
?>	