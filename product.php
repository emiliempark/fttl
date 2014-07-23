<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/model_collection.php");


	$aProductList = Collection::grabAllProducts();
	
	$iProductID = 1;
	if(isset($_GET["pid"])){
		$iProductID = $_GET["pid"];
	}

	$oProduct = new product();
	$oProduct->load($iProductID);
	
	echo View::render_product($oProduct);


	require_once("includes/footer.php");
?>				