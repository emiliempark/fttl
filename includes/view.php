<?php
	class View{

		static public function render_navigation($iMemberID){

			$sHTML = '<ul id="public-menu">';
				$sHTML .= '<li><a href="index.php">Home</a></li>';
				$sHTML .= '<li><a href="about.php">About FTTL</a></li>';
				$sHTML .= '<li><a href="catalogue.php">Catalogue</a></li>';
				$sHTML .= '<li><a href="contact.php">Contact</a></li>';
				$sHTML .= '<li><a href="visitor-info.php">Visitor information</a></li>';
				$sHTML .= '<li><a href="booking.php">Booking request</a></li>';
			$sHTML .= '</ul>';
			
			if($iMemberID != 0){
				$sHTML .= '<ul id="member-menu">';
					$sHTML .= '<li><a href="profile.php">Profile settings</a></li>';
					$sHTML .= '<li><a href="">Booking list & Itinerary</a></li>';
				$sHTML .= '</ul>';
			}

			return $sHTML;
		}

		static public function render_catalogue($aPRODUCT_LISTS){

			$sHTML='<ul>';

			for($iCount = 0; $iCount<count($aPRODUCT_LISTS); $iCount++){
				
				$oProduct = $aPRODUCT_LISTS[$iCount];

				$sHTML.='<li>';
					$sHTML.='<a href="product.php?pid='.$oProduct->ProductID.'">';
						$sHTML.='<img src="assets/img/products/'.$oProduct->PhotoPath.'" alt="'.$oProduct->ProductName.'">';
						$sHTML.='<div class="screen">';
							$sHTML.='<p class="productName">'.$oProduct->ProductName.'</p>';
							$sHTML.='<p class="productPrice">$ '.$oProduct->HourlyPrice.'</p>';
						$sHTML.='</div>';
					$sHTML.='</a>';
				$sHTML.='</li>';
			}

			$sHTML.='</ul>';

			return $sHTML;
		}

		static public function render_product($oPRODUCT){


			$sHTML='<section id="product-content">';
			$sHTML.='<div id="gallery">';
			$sHTML.='<button id="goLeft"> go left</button>';
			$sHTML.='<button id="goRight"> go right</button>';
			$sHTML.='<div id="imgViewer">';
			$sHTML.='<img src="assets/img/products/photographic_gallery_01.jpg" alt="photographic" class="show">';
			$sHTML.='<img src="assets/img/products/photographic_gallery_02.jpg" alt="photographic">';
			$sHTML.='<img src="assets/img/products/photographic_gallery_03.jpg" alt="photographic">';
			$sHTML.='</div>';
			$sHTML.='</div>';
			$sHTML.='<article>';
			$sHTML.='<h1>'.$oPRODUCT->ProductName.'</h1>';
			$sHTML.='<div id="buttons">';
			$sHTML.='<a href="catalogue.php"> Go to Catalogue </a>';
			$sHTML.='<a href=""> Book Now</a>';
			$sHTML.='</div>';
			$sHTML.='<div class="split"></div>';
			$sHTML.='<div class="product-chapter-left">';
			$sHTML.='<h2>Description</h2>';
			$sHTML.='<p>'.$oPRODUCT->Description.'</p>';
			$sHTML.='</div>';
			$sHTML.='<div class="product-chapter-right">';
			$sHTML.='<h2>Price info</h2>';
			$sHTML.='<p>$ '.$oPRODUCT->HourlyPrice.' / Hr</p>';
			$sHTML.='<h2>Duration</h2>';
			$sHTML.='<p>7.5 Hrs</p>';
			$sHTML.='<h2>Available time</h2>';
			$sHTML.='<p>'.$oPRODUCT->AvailableTime.'</p>';
			$sHTML.='</div>';
			$sHTML.='</article>';
			$sHTML.='</section>';
			$sHTML.='<aside id="product-sidebar">';
			$sHTML.='<div>';
			$sHTML.='<h1>Key words</h1>';
			$sHTML.='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, temporibus, iste, a totam laborum iusto explicabo ipsa voluptas cupiditate facilis excepturi id? Quo, iusto, praesentium suscipit pariatur dignissimos deleniti aliquam?</p>';
			$sHTML.='</div>';
			$sHTML.='<div>';
			$sHTML.='<h1>Recommendation</h1>';
			$sHTML.='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, temporibus, iste, a totam laborum iusto explicabo ipsa voluptas cupiditate facilis excepturi id? Quo, iusto, praesentium suscipit pariatur dignissimos deleniti aliquam?</p>';
			$sHTML.='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, temporibus, iste, a totam laborum iusto explicabo ipsa voluptas cupiditate facilis excepturi id? Quo, iusto, praesentium suscipit pariatur dignissimos deleniti aliquam?</p>';
			$sHTML.='</div>';
			$sHTML.='</aside>';
			
			return $sHTML;
		}

		static public function render_profile($oCUSTOMER){
			
		}
	}
?>