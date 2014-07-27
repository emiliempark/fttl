<?php
	require_once("connection.php");

	class Product{

		private $iProductID;
		private $sProductName;
		private $sDescription;
		private $fHourlyPrice;
		private $sAvailableTime;
		private $sPhotoPath;
		private $iPromotion;
		private $iActive;
		private $bExisting;

		public function __construct(){
			$this->iProductID = 0;
			$this->sProductName = "";
			$this->sDescription = "";
			$this->fHourlyPrice = 0;
			$this->sAvailableTime = "";
			$this->sPhotoPath = "";
			$this->iPromotion = 0;
			$this->iActive = 0;
			$this->bExisting= false;
		}

		public function load($PRODUCT_ID){
			//1. open connection
			$oConnection = new Connection();
			//2. query 
			$sSQL = "SELECT ProductID, ProductName, Description, HourlyPrice, AvailableTime, PhotoPath, Promotion, Active
					FROM tbProduct
					WHERE ProductID=".$PRODUCT_ID;

			$oResult = $oConnection ->query($sSQL);

			//3.fetch data

			$aProduct = $oConnection ->fetch_array($oResult);
			$this->iProductID = $aProduct["ProductID"];
			$this->sProductName = $aProduct["ProductName"];
			$this->sDescription = $aProduct["Description"];
			$this->fHourlyPrice = $aProduct["HourlyPrice"];
			$this->sAvailableTime = $aProduct["AvailableTime"];
			$this->sPhotoPath = $aProduct["PhotoPath"];
			$this->iPromotion = $aProduct["Promotion"];
			$this->iActive = $aProduct["Active"];

			$this->bExisting = true;

			//4. close connection
			$oConnection ->close_connection();
		}
		public function save(){

			$oConnection = new Connection();

			if( $this->bExisting == false ){ // do insert query.

				$sSQL = "INSERT INTO  tbproduct (
						ProductName, Description, HourlyPrice, AvailableTime, PhotoPath, Promotion, Active
						)
						VALUES (
						'".$this->sProductName."',
						'".$this->sDescription."',
						'".$this->fHourlyPrice."',
						'".$this->sAvailableTime."', 
						'".$this->sPhotoPath."',
						'".$this->iPromotion."',
						'".$this->iActive."'
						)";	

				$bResult = $oConnection->query($sSQL); // will get result

				if($bResult == true){
					// get the id of the new customer that i just created.
					$this->iProductID = $oConnection->get_insert_id();
					$this->bExisting = true;

				}else{
					// if the query result is not right, die this function. 
					die("Query has failed to add a new product");

				}
			}else{


				$sSQL="UPDATE  tbproduct 
						SET  ProductName =  '".$this->sProductName."',
							Description =  '".$this->sDescription."',
							HourlyPrice =  '".$this->fHourlyPrice."',
							AvailableTime =  '".$this->sAvailableTime."',
							PhotoPath =  '".$this->sPhotoPath."',
							Promotion =  '".$this->iPromotion."',
							Active =  '".$this->iActive."' 
						WHERE  tbproduct.ProductID =".$this->iProductID;

				$bResult= $oConnection->query();

				if($bResult == false){
					die("Update failed");
				}
			}
		}

		public function __get($VAR){
			switch($VAR){
				case "ProductID":
					return $this->iProductID;
					break;
				case "ProductName":
					return $this->sProductName;
					break;
				case "Description":
					return $this->sDescription;
					break;
				case "HourlyPrice":
					return $this->fHourlyPrice;
					break;
				case "AvailableTime":
					return $this->sAvailableTime;
					break;
				case "PhotoPath":
					return $this->sPhotoPath;
					break;
				case "Promotion":
					return $this->iPromotion;
					break;
				case "Active":
					return $this->iActive;
					break;
				default:
					die($VAR."product __get has failed ");
			}
		}

		public function __set($VAR, $VALUE){
			switch($VAR){
				case "ProductName":
					$this->sProductName = $VALUE;
					break;
				case "Description":
					$this->sDescription = $VALUE;
					break;
				case "HourlyPrice":
					$this->fHourlyPrice = $VALUE;
					break;
				case "AvailableTime":
					$this->sAvailableTime = $VALUE;
					break;
				case "PhotoPath":
					$this->sPhotoPath = $VALUE;
					break;
				case "Promotion":
					$this->iPromotion = $VALUE;
					break;
				case "Active":
					$this->iActive = $VALUE;
					break;
				default:
					die($VAR ." in product __set has failed.");				
			}
		}

	}


	// -------------------- test
	// $oProduct = new Product();
	// $oProduct->load(1);

	// echo("<pre>");
	// print_r($oProduct);
	// echo("<pre>");

	//---------------------test

	// $oProduct = new Product();

	// $oProduct->ProductName = "test";
	// $oProduct->Description = "test";
	// $oProduct->HourlyPrice = "test";
	// $oProduct->AvailableTime = "test";
	// $oProduct->PhotoPath = "test";
	// $oProduct->Promotion = 0;
	// $oProduct->Active = 1 ;

	// $oProduct->save();

	// print_r($oProduct);
?>





