<?php
	class Form{
		private $sHTML;
		private $aData;
		private $aError;

		public function __construct(){
			$this->sHTML = '<form action="" method="POST">';
			$this->aData = array();
			$this->aError = array();
		}

		public function renderTextInput($sLABEL, $sCONTROL_NAME){

			$sData ="";

			if(isset($this->aData[$sCONTROL_NAME])){
				$sData = $this->aData[$sCONTROL_NAME];
			}

			$sError="";

			if(isset($this->aError[$sCONTROL_NAME])){
				$sError = $this->aError[$sCONTROL_NAME];
			}

			$this->sHTML .= '<label for="'.$sCONTROL_NAME.'">'.$sLABEL.'</label>';
			$this->sHTML .= '<input type="text" name="'.$sCONTROL_NAME.'" id="'.$sCONTROL_NAME.'" placeholder="required" value ="'.$sData.'"/>';
			$this->sHTML .= '<span class="errorMessage">'.$sError.'</span>';
		}

		public function renderSubmitInput($sLABEL, $sCONTROL_NAME){
			$this->sHTML .= '<input type="'.$sCONTROL_NAME.'" name="'.$sCONTROL_NAME.'" value="'.$sLABEL.'">';
		}

		public function checkFilled($sCONTROL_NAME){
			$sData = "";

			if(isset($this->aData[$sCONTROL_NAME])){
				$sData = $this->aData[$sCONTROL_NAME];
			}

			if(trim($this->aData[$sCONTROL_NAME])== ""){
				$this->aError[$sCONTROL_NAME] = "Must be filled";
			}
		}

		public function checkMatch($sCONTROL_NAME_1, $sCONTROL_NAME_2){

			$sPasswordInput1 = ""; 


			if(isset($aData[$sCONTROL_NAME_1])){
				$sPasswordInput1 = $aData[$sCONTROL_NAME_1];
			}

			$sPasswordInput1 = ""; 
			
			if(isset($aData[$sCONTROL_NAME_2])){
				$sPasswordInput2 = $aData[$sCONTROL_NAME_2];
			}

			if( $sPasswordInput1 != $sPasswordInput2 ){
				$this->aError[$sCONTROL_NAME_2] = "Must match";
			}
		}

		public function renderErrorMessage($sCONTROL_NAME, $sMESSAGE){
			
			$this->aError[$sCONTROL_NAME] = $sMESSAGE;
		}

		public function __get($VAR){
			switch($VAR){
				case "HTMLcode":
					return $this->sHTML.'</form>';
					break;
				
				case "isValid":
					if((count($this->aError)) == 0){
						return true;
					}else{
						return false;
					}
					break;
				
				default:
					die($VAR." does not exist.");

			}
		}

		public function __set($VAR, $VALUE){
			switch($VAR){
				case "Data":
					$this->aData=$VALUE;
					break;
				
				default:
					die($VAR ."fails");
			}
		}
	}
?>