<?php
	require_once("includes/view.php");
	require_once("includes/header.php");
	require_once("includes/model_collection.php");


	$aProductList = Collection::grabAllProducts();

?>
					<!-- main-content -->
					<section id="catalogue">
						<h2>Activities</h2>

						<?php
							$iProductID = 1;

							if(isset($_GET["pid"])){
								$iProductID = $_GET["pid"];
							}
							
							$sURL ='catalogue.php?pid='.$iProductID;
							$iTotalItems = count($aProductList);
							$iItemsPerPage = 8;
							
							$iCurrntPage= 1;
							if(isset($_GET["page"])){
								$iCurrntPage = $_GET["page"];
							}

							echo View::render_catalogue($aProductList,$iCurrntPage,$iItemsPerPage);

							echo View::renderPaginator($sURL,$iTotalItems,$iItemsPerPage,$iCurrntPage);

						?>
						
					</section>
<?php
	require_once("includes/footer.php");
?>