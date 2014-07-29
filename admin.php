<?php 
ob_start();
require_once("includes/view.php");

require_once("includes/header_admin.php");
require_once("includes/model_collection.php");
require_once("includes/form.php");

	
	echo "This paga is for admin. If you're a user, go to the main page.<br/>";
	echo '<a href="index.php" class="sign-in-link">Go to the main page</a>';

	$oForm = new Form();

	if(isset($_POST["submit"])){

		$oForm->Data = $_POST;

		$oForm->checkFilled("admin-username");
		$oForm->checkFilled("admin-password");

		if($oForm->isValid == true){

			$sUsernameInput = $_POST["admin-username"];

			$oCustomer = Collection::findCustomerByUsername($sUsernameInput);

			if($oCustomer->Username !== "admin"){

				$oForm->renderErrorMessage("admin-username","incorrect admin name.");

			}elseif(Collection::encodePassword($_POST["admin-password"]) !== $oCustomer->Password){

				$oForm->renderErrorMessage("admin-password","Password is not correct.");

			}else{

				$iAdminID = $oCustomer->CustomerID;
				$_SESSION["AdminID"] = $iAdminID;

				header("location:product_manager.php");

				exit;
			}

		}

	}

	$oForm->renderTextInput("Username", "admin-username");
	$oForm->renderPasswordInput("Password", "admin-password");
	$oForm->renderSubmitInput("Sign-in", "submit");




echo $oForm->HTMLcode;



require_once("includes/footer_admin.php");
?>