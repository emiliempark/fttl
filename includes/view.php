<?php
	class View{

		static public function render_navigation($iMemberID){

			$sHTML = '<ul id="public-menu">';
			$sHTML .= '<li><a href="index.php">Home</a></li>';
			$sHTML .= '<li><a href="about.php">About FTTL</a></li>';
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
	}
?>