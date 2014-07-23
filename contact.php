<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/form.php");
?>
					<!-- main-content -->
					<section id="contact-content">
						<h2>Contact us</h2>
						<div id="googleMap">google map</div>
						<?php

							$oForm = new Form();
							$oForm->renderTextInput("First Name","firstName");
							$oForm->renderTextInput("Last Name","lastName");
							$oForm->renderTextInput("Email","email");
							$oForm->renderTextInput("Contactnumber","contactNumber");
							$oForm->renderTextarea("Message","message");
							$oForm->renderSubmitInput("Send","submit");

							echo $oForm->HTMLcode;

						?>
					</section>
<?php					
	require_once("includes/footer.php");
?>				