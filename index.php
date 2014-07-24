<?php 
	require_once("includes/view.php");

	require_once("includes/header.php");
	require_once("includes/model_collection.php");

	$aProductList = Collection::grabAllProducts();

?>
					<section id="front-main-content">
						<h2>Welcome to <abbr title="Fly To The Limit">FTTL</abbr></h2>
						<ul id="category">
							
							<li><a href="catalogue.php">Activities</a></li>
							<li><a href="">Accommodation</a></li>
							<li><a href="">Eatery</a></li>

							
						</ul>
					</section>
<?php 
	require_once("includes/front-sidebar.php");
	require_once("includes/footer.php");
?>