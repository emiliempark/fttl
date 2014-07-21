<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="language" content="EN">
	<meta name="description" content="Tourists and travel experts best choice of traveling Queens town in NZ">
	<meta name="keywords" content="travel, fttl, queenstown, aerosports">
	<meta name="robots" content="index, follow">
	<meta name="copyright" content="M12 Design Park">
	<meta name="author" content="Emilie Park">
	<meta name="creationdate" content="20 July 2014">
	<meta name="distribution" content="local">
	<meta name="rating" content="general">
	<title>Fly To The Limit</title>
	<link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
	<div id="outer-frame">
		<div id="inner-frame"></div>
			<div id="wrapper">
				<header>
					<h1 class="slogan" >No.1 Travel Agency in NZ</h1>
					<div id="logo"><a href="">FTTL</a></div>
					<nav>
						<ul id="public-menu">
							<li><a href="">Home</a></li>
							<li><a href="">About FTTL</a></li>
							<li><a href="">Contact</a></li>
							<li><a href="">Visitor information</a></li>
							<li><a href="">Booking request</a></li>
						</ul>
						<ul id="member-menu">
							<li><a href="">Profile settings</a></li>
							<li><a href="">Booking list & Itinerary</a></li>
						</ul>
					</nav>
				</header>
				<section id="content-panel">
					<div id="top-info">
						<div id="status"><a href="">Sign-in</a> or <a href="">become a member</a></div>
						<div id ="search">+64 3 123 3456
							<form action="http://www.fttl.co.nz"  method="GET" role="search">
								<input name="search" type="search" placeholder="- search" required />
								<button type="submit" role="button">search</button>
							</form>
						</div>
					</div>
					<!-- main-content -->
					<section id="booking-content">
						<h1>Booking request</h1>
						<div id="booking">
							<form action="" method="">
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
							</form>
						</div>
					</section>
				</section>
				<footer>
					<ul id="social-media">
						<li><a href="">facebook</a></li>
						<li><a href="">instagram</a></li>
						<li><a href="">twitter</a></li>
						<li><a href="">youtube</a></li>
					</ul>
					<p id="credit">© 2014 FTTL, All rights reserved. Powered by M12 Design Park</p>
					
					<ul id="bottom-contact">
						<li><a href="">Inquery</a></li>
						<li>
							<a href="">Opt in newsletter</a>
						</li>
						<!-- newsletter popup here -->
						<div id="newsletter-join">
							<form action="" method="">
								<legend>
									<input type="text" name="name" id="name" placeholder="Name" required/>
									<input type="text"	name="emain" id="email" placeholder="Email" required />
								</legend>
								<input type="submit" value="Opt in" />
							</form>
						</div>
					</ul>
				</footer>
			</div><!-- wrapper -->
	</div><!-- outer frame -->
</body>
</html>