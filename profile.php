<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/form.php");
?>

	<section id="profile-settings">
		<h2>Profile Settings</h2>
		<?php
			$oForm = new Form();

			$iCustomerID = $_SESSION["CustomerID"];

			$oCustomer = new Customer();
			$oCustomer->load($iCustomerID);

			$aExistingDetails = array();
			$aExistingDetails["first_Name"] = $oCustomer->firstname;
			$aExistingDetails["last_Name"] = $oCustomer->lastname;
			$aExistingDetails["address"] = $oCustomer->address;
			$aExistingDetails["telephone"] = $oCustomer->telephone;
			$aExistingDetails["email"] = $oCustomer->email;

			$oForm->Data = $aExistingDetails;

			if(isset($_POST["submit"])){

				$oForm->Data = $_POST;

				$oForm->checkFilled("firstname");
				$oForm->checkFilled("lastname");
				$oForm->checkFilled("email");
				$oForm->checkFilled("address");
				$oForm->checkFilled("phone");
				$oForm->checkFilled("register-username");
				$oForm->checkFilled("register-password");
				$oForm->checkFilled("register-password-confirm");
				$oForm->checkMatch("register-password","register-password-confirm");

				if($oForm->isValid){

					$oCustomer = new Customer();

					$oCustomer->FirstName = $_POST["firstname"];
					$oCustomer->LastName = $_POST["lastname"];
					$oCustomer->Email = $_POST["email"];
					$oCustomer->Address = $_POST["address"];
					$oCustomer->Phone = $_POST["phone"];
					$oCustomer->Username = $_POST["register-username"];
					$oCustomer->Password = $_POST["register-password"];

					$oCustomer->save();
					
					header("location:profile.php");
					exit;
				}


			}

			$oForm->renderTextInput("Firstname", "firstname");
			$oForm->renderTextInput("Lastname", "lastname");
			$oForm->renderTextInput("Email", "email");
			$oForm->renderTextInput("Address", "address");
			$oForm->renderTextInput("Phone", "phone");
			$oForm->renderTextInput("Username", "register-username");
			$oForm->renderTextInput("Password", "register-password");
			$oForm->renderTextInput("Confirm", "register-password-confirm");
			$oForm->renderSubmitInput("Sign-in", "submit");

			echo $oForm->HTMLcode;
		?>								
	</section>

<?php					
	require_once("includes/footer.php");
?>				