<?php
ob_start();
	require_once("includes/view.php");
	require_once("includes/header_admin.php");
	require_once("includes/model_collection.php");
	require_once("includes/form.php");
?>

<section id="product_manager">
	<h2>Product Manager</h2>
	
	<?php

	$aProducts = Collection::grabAllProducts();

	$sHTML = '';

	$sHTML .= '<ul>';
	
	//for($iCount=0; $iCount<count($aProducts); $iCount++){
	$iCount = 1;

	$sHTML .= '<li>';

	$oProduct = $aProducts[$iCount];

	echo '<p>'.$oProduct->ProductID.' | '.$oProduct->ProductName.'</p>';

	$oForm = new Form();

	$aExistingDetails = array();

	$aExistingDetails["product_name"] = $oProduct->ProductName; 
	$aExistingDetails["descriiption"] = $oProduct->Description; 
	$aExistingDetails["hourly_price"] = $oProduct->HourlyPrice; 
	$aExistingDetails["available_time"] = $oProduct->AvailableTime; 
	$aExistingDetails["photopath"] = $oProduct->PhotoPath; 
	$aExistingDetails["promotion"] = $oProduct->Promotion; 
	$aExistingDetails["active"] = $oProduct->Active; 

	$oForm->Data = $aExistingDetails;

	if(isset($_POST["submit"])){

		$oForm->Data = $_POST;

		$oForm->checkfilled("product_name");
		$oForm->checkfilled("descriiption");
		$oForm->checkfilled("hourly_price");
		$oForm->checkfilled("available_time");
		$oForm->checkfilled("photopath");
		$oForm->checkfilled("promotion");
		$oForm->checkfilled("active");

		if($oForm->isValid){

			$oProduct->ProductName = $_POST["product_name"];
			$oProduct->Description = $_POST["descriiption"];
			$oProduct->HourlyPrice = $_POST["hourly_price"];
			$oProduct->AvailableTime = $_POST["available_time"];
			$oProduct->PhotoPath = $_POST["photopat"];
			$oProduct->Promotion = $_POST["promotion"];
			$oProduct->Active = $_POST["active"];

			$oCustomer->save();

			header("Lodation: product_manaber.php");
			exit;
		}
	}
			
	$oForm->renderTextInput("Product Name","product_name".$oProduct->ProductID);
	$oForm->renderTextInput("Description","descriiption".$oProduct->ProductID);
	$oForm->renderTextInput("Hourly Price","hourly_price".$oProduct->ProductID);
	$oForm->renderTextInput("Available Time","available_time".$oProduct->ProductID);
	$oForm->renderTextInput("Photo Path","photopath".$oProduct->ProductID);
	$oForm->renderTextInput("Promotion","promotion".$oProduct->ProductID);
	$oForm->renderTextInput("Active","active".$oProduct->ProductID);

	$oForm->renderSubmitInput("Save Change","submit");

	echo $oForm->HTMLcode;

	$sHTML .= '</li>';

			//}
	$sHTML .= '</ul>';	
	
	echo $sHTML;
	?>
</section>		

<?php 
require_once("includes/footer.php");
?>					


