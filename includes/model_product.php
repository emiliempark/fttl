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

		public function __construct(){
			$this->iProductID = 0;
			$this->sProductName = "";
			$this->sDescription = "";
			$this->fHourlyPrice = 0;
			$this->sAvailableTime = "";
			$this->sPhotoPath = "";
			$this->iPromotion = 0;
			$this->iActive = 0;
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

			//4. close connection
			$oConnection ->close_connection();
		}
		public function save(){}
		//public function __get(){}
		//public function __set(){}

	}


	// -------------------- test
	// $oProduct = new Product();
	// $oProduct->load(1);

	// echo("<pre>");
	// print_r($oProduct);
	// echo("<pre>");
?>





