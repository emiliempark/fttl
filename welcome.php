<?php 
	require_once("includes/view.php");

	require_once("includes/header.php");
	require_once("includes/form.php");
	session_start();


	if(isset($_SESSION["CustomerID"])){
		$oCustomer = new Customer();
		$oCustomer->load($_SESSION["CustomerID"]);

		echo "Welcome".$oCustomer->FirstName ."start your journey" ;
		echo "Go to home" ;

	}else{

		echo "Go to home" ;
		
	}
	

	require_once("includes/footer.php");
?>	