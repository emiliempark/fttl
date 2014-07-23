<?php 
	require_once("includes/view.php");

	require_once("includes/header.php");
	require_once("includes/model_collection.php");
	$aProductList = Collection::grabAllProducts();

?>
					<section id="front-main-content">
						<h2>Welcome to <abbr title="Fly To The Limit">FTTL</abbr></h2>
						<ul id="category">
							
							<li><a href="">Activities</a></li>
							<li><a href="">Flights</a></li>
							<li><a href="">Accommodation</a></li>
							<li><a href="">Food & Drink</a></li>

							<?php
							echo View::render_catalogue($aProductList);


							$iProductID = 1;

							if(isset($_GET["pid"])){
								$iProductID = $_GET["pid"];
							}

						?>
						</ul>
					</section>
<?php 
	require_once("includes/front-sidebar.php");
	require_once("includes/footer.php");
?>