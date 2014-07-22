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
					$sHTML .= '<li><a href="">Profile settings</a></li>';
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

		static public function render_product(){
			$sHTML='';
			$sHTML.='';
			
			return $sHTML;
		}
	}
?>