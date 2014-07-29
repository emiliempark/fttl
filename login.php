<?php 
	ob_start();
	require_once("includes/view.php");

	
	require_once("includes/form.php");
	require_once("includes/model_collection.php");

	$sTitle = "Fly To The Limit - Login";
	require_once("includes/header.php");
?>
					<!--main-content -->
					<section id="login-content">
						<h2>Login</h2>
						
							<?php
								

								if(isset($_SESSION["CustomerID"])){

									$oCustomer = new Customer();
									$oCustomer->load($_SESSION["CustomerID"]);

									echo '<p> Hi,'.htmlentities($oCustomer->FirstName).', you are aleady logged in. You must log out before you can log in another account </p>';

								}else{
									echo "If you haven't registered,.<br/>";
									echo '<a href="register.php" class="sign-in-link">Go to become a member</a>';
									
									$oForm = new Form();

									if(isset($_POST["submit"])){

										$oForm->Data = $_POST;

										$oForm->checkFilled("login-username");
										$oForm->checkFilled("login-password");

										if($oForm->isValid == true){
											
											$sUsernameInput = $_POST["login-username"];

											$oCustomer = Collection::findCustomerByUsername($sUsernameInput);

											if($oCustomer == false){
												
												$oForm->renderErrorMessage("login-username","Username does not exist.");
											
											}elseif(Collection::encodePassword($_POST["login-password"]) !== $oCustomer->Password){
												
												$oForm->renderErrorMessage("login-password","Password is not correct.");
											
											}else{
											
												$iLoginCustomerID = $oCustomer->CustomerID;
												$_SESSION["CustomerID"] = $iLoginCustomerID;

												header("location:index.php");

												exit;
											}

										}

									}
									$oForm->renderTextInput("Username", "login-username");
									$oForm->renderTextInput("Password", "login-password");
									$oForm->renderSubmitInput("Sign-in", "submit");
								}



								echo $oForm->HTMLcode;
							?>
							
					</section>
<?php 
	require_once("includes/footer.php");
?>					