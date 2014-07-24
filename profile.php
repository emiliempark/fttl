<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/form.php");
	require_once("includes/model_customer.php");

	$iCustomerID=0;

	if(isset($_SESSION["CustomerID"])){
		$iCustomerID = $_SESSION["CustomerID"];
	}

	$oCustomer = new Customer();

	$oCustomer->load($iCustomerID);

	$aExistingDetails = array();

?>

	<section id="profile-settings">
		<h2>Profile Settings</h2>
		<div id="changePassword">
			<p class="label">User name</p>
			<p class="inputText"><?php echo $oCustomer->Username; ?></p>
			<?php
				$oForm = new Form();

				if(isset($_POST["submit"])){

					 $oForm->Data = $_POST;
					 $oForm->checkFilled("new-password");
					 $oForm->checkFilled("new-password-confirm");
					 $oForm->checkMatch("new-password", "new-password-confirm");

					 if($oForm->isValid){

					 	$oCustomer->Password = $_POST["new-password"];

					 	$oCustomer->save();

					 	header("Location: profile.php");
					 	exit;
					 }
				}

				$oForm->renderPasswordInput("New Password","new-password");
				$oForm->renderPasswordInput("Confirm","new-password-confirm");
				$oForm->renderSubmitInput("Change Password", "submit");

				echo $oForm->HTMLcode;

			?>
		</div>

		<div id="changeContact">
			<p class="label">First name</p>
			<p class="inputText"> <?php echo $oCustomer->FirstName; ?></p>
			<p class="label">Last name</p>
			<p class="inputText"> <?php echo $oCustomer->LastName; ?></p>
			<?php
				$oForm = new Form();

				$aExistingDetails = array();
				$aExistingDetails["email"] = $oCustomer->Email;
				$aExistingDetails["address"] = $oCustomer->Address;
				$aExistingDetails["phone"] = $oCustomer->Phone;

				$oForm->Data = $aExistingDetails;

				if(isset($_POST["submit"])){
					$oForm->Data = $_POST;

					$oForm->checkFilled("email");
					$oForm->checkFilled("address");
					$oForm->checkFilled("phone");

					if($oForm->isValid){

						$oCustomer->Email = $_POST["email"];
						$oCustomer->Address = $_POST["address"];
						$oCustomer->Phone = $_POST["phone"];

						$oCustomer->save();

						header("Location: profile.php");
						exit;
					}

				}

				$oForm->renderTextInput("Email", "email");
				$oForm->renderTextInput("Address", "address");
				$oForm->renderTextInput("Phone", "phone");
				$oForm->renderSubmitInput("Change Contact", "submit");
				echo $oForm->HTMLcode;
			?>
		</div>	
	 					
	</section>

<?php					
	require_once("includes/footer.php");

?>				