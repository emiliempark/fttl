<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/model_collection.php");
	require_once("includes/form.php");

	$aProductOptions = Collection::grabAllProducts();
?>
					<!-- main-content -->
					<section id="booking-content">
						<h2>Booking request</h2>
						<div id="booking-ticket">



							<?php
								$oForm = new Form();

							?>	
						<div id="ticket-title">
							<?php
								$oForm->renderSelectInput("activity", $aProductOptions);
							?>	
						</div>
								
						<div id="ticket-detail">
							<?php

								$oForm->renderDateInput("Date","date");
								$oForm->renderTimeInput("Time","time");
								$oForm->renderTextInput("Num of People","num-of-people");
							?>	
						</div>
								
						<div id="ticket-message">

							<?php	$oForm->renderTextarea("Message","ticket-message");	?>
						</div>

						<div id="ticket-checkout">
						<p>Total estimate price is</p>
						<p id="total-price">$ 9999.99 <span id="currency">NZD</span></p>
						<p>Our booking manager will contact you with further information.</p>

							<?php	$oForm->renderSubmitInput("Check out the ticket","submit");	?>
						</div>

							<?php echo $oForm->HTMLcode; ?>

								
							</div>
						
						
						</div>
					</section>
<?php
	require_once("includes/footer.php");
?>