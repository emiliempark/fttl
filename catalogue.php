<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/model_collection.php");
	session_start();

	$aProductList = Collection::grabAllProducts();

?>
					<!-- main-content -->
					<section id="catalogue">
						<h2>Activities</h2>

						<?php
							echo View::render_catalogue($aProductList);


							$iProductID = 1;

							if(isset($_GET["pid"])){
								$iProductID = $_GET["pid"];
							}

						?>
						
					</section>
<?php
	require_once("includes/footer.php");
?>