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
	
	for($iCount=0; $iCount<count($aProducts); $iCount++){

			$sHTML .= '<li>';

			$oProduct = $aProducts[$iCount];

			echo '<p>'.$oProduct->ProductID.' | '.$oProduct->ProductName.'</p>';

			$oForm = new Form();

			$aExistingDetails = array();

			$aExistingDetails["product_name".$oProduct->ProductID] = $oProduct->ProductName; 
			$aExistingDetails["descriiption".$oProduct->ProductID] = $oProduct->Description; 
			$aExistingDetails["hourly_price".$oProduct->ProductID] = $oProduct->HourlyPrice; 
			$aExistingDetails["available_time".$oProduct->ProductID] = $oProduct->AvailableTime; 
			$aExistingDetails["photopath".$oProduct->ProductID] = $oProduct->PhotoPath; 
			$aExistingDetails["promotion".$oProduct->ProductID] = $oProduct->Promotion; 
			$aExistingDetails["active".$oProduct->ProductID] = $oProduct->Active; 

			$oForm->Data = $aExistingDetails;

			if(isset($_POST["submit"]) && ($_POST["ProductID"] == $oProduct->ProductID)){

				$oForm->Data = $_POST;

				$oForm->checkfilled("product_name".$oProduct->ProductID);
				$oForm->checkfilled("descriiption".$oProduct->ProductID);
				$oForm->checkfilled("hourly_price".$oProduct->ProductID);
				$oForm->checkfilled("available_time".$oProduct->ProductID);
				$oForm->checkfilled("photopath".$oProduct->ProductID);
				$oForm->checkfilled("promotion".$oProduct->ProductID);
				$oForm->checkfilled("active".$oProduct->ProductID);

				if($oForm->isValid){

					$oProduct->ProductName = $_POST["product_name".$oProduct->ProductID];
					$oProduct->Description = $_POST["descriiption".$oProduct->ProductID];
					$oProduct->HourlyPrice = $_POST["hourly_price".$oProduct->ProductID];
					$oProduct->AvailableTime = $_POST["available_time".$oProduct->ProductID];
					$oProduct->PhotoPath = $_POST["photopath".$oProduct->ProductID];
					$oProduct->Promotion = $_POST["promotion".$oProduct->ProductID];
					$oProduct->Active = $_POST["active".$oProduct->ProductID];

					$oProduct->save();

					header("Location: product_manager.php");
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
			$oForm->renderHiddenInput("ProductID",$oProduct->ProductID);
			$oForm->renderSubmitInput("Save Change","submit");


			echo $oForm->HTMLcode;

			$sHTML .= '</li>';

			}
	$sHTML .= '</ul>';	
	
	echo $sHTML;
	?>
</section>		

<?php 
require_once("includes/footer.php");
?>					


