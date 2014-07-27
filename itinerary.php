<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/form.php");
?>

<section id="profile-settings">
		<h2>Itinerary</h2>
		<div >
		<?php
			if(isset($_SESSION["CustomerID"])){
				$oCustomer = new Customer();
				$oCustomer->load($_SESSION["CustomerID"]);

				echo $oCustomer->FirstName.", your booking request is here.";
				echo '<ul>';
				echo '<li>
					<div>Product Name</div>
					<div>Booking Date</div>
					<div>Num of people</div>
					<div></div>
					<div>Cancel</div>
				</li>
				<li></li>
			</ul>';
			}else{
				echo "You must login to book your activities.<br/>";
				echo '<a href="login.php" class="sign-in-link"> Go to sign-in</a>';
			}	
		?>
		
		
			<ul>
				<li>
					<div>Product Name</div>
					<div></div>
					<div></div>
					<div></div>
					<div>Cancel</div>
				</li>
				<li></li>
			</ul>
	
		<!-- <form action="" method="">
			<fieldset id="location">
				<label for="locationInput">Location</label>
				<input type="text" name="location" id="locationInput"/>
			</fieldset>
			<fieldset id="activity">
				<label for="activityOption">FTTL Product</label>
				<span class="square">
					<select name="activity" id="activityOption">
						<optgroup label="Activities">
							<option value="">Sightseeing</option>
							<option value="">Skydiving</option>
							<option value="">Glider flight</option>
							<option value="">Heli skiing</option>
							<option value="">Lake trip</option>
							<option value="">Mountain at sunset</option>
							<option value="">Photographic flight</option>
						</optgroup>
						<optgroup label="Flights">
							<option value="">Charter</option>
							<option value="">Drop off</option>
							<option value="">Fly in, fly out</option>
						</optgroup>
					</select>
				</span>
			</fieldset>
			<fieldset id="dateTime">
				<legend>Date & Time</legend>
				<input type="datetime-local" name="" id=""/>
				<input type="datetime-local" name="" id=""/>
			</fieldset>
			<fieldset id="people">
				<legend>No. of people</legend>
				<label for="adult">Adult</label>
				<input type="number" name="adult" id="adult" min="0" step="1" value="0"/>
				<label for="child">Child</label>
				<input type="number" name="child" id="child" min="0" step="1" value="0"/>
			</fieldset>
			<fieldset id="pickup">
				<legend>Pick up and drop off</legend>
				<input type="radio" name="adult" id="adult" selected/>
				<label for="adult">No</label>
				<input type="radio" name="child" id="child" />
				<label for="child">Yes</label>
			</fieldset>
			<input type="textarea">
			<input type="submit" value="Booking request"/>
		</form> -->
	</div>
</section>
<?php					
	require_once("includes/footer.php");
?>	