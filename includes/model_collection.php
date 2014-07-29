<?php
	require_once("connection.php");
	require_once("model_product.php");
	require_once("model_customer.php");

	class Collection{

		static public function grabAllProducts(){

			$aProducts = array();

			$oConnection = new Connection();

			$sSQL = "SELECT ProductID FROM tbproduct";

			$oResult= $oConnection->query($sSQL);

			while($aRow = $oConnection->fetch_array($oResult)){
				$oProduct = new Product();
				$oProduct->load($aRow["ProductID"]);
				$aProducts[]=$oProduct;
			}

			$oConnection->close_connection();

			return $aProducts;
		}


		static public function findCustomerByUsername($USERNAME_INPUT){
			$oConnection = new Connection();

			$sSQL= 'SELECT CustomerID
					FROM tbCustomer
					WHERE Username = "'.$oConnection->escape_value($USERNAME_INPUT).'"';

			$oResult = $oConnection->query($sSQL);

			$aCustomer = $oConnection->fetch_array($oResult);

			$oConnection->close_connection();

			if($aCustomer != false){
				
				$oCustomer = new Customer();
				$oCustomer->load($aCustomer["CustomerID"]);

				return $oCustomer;
			}else{

				die($USERNAME_INPUT." doesn\'t exist.");
			}
		}

		static public function encodePassword($sPASSWORD){

			$sSalt = hash('sha1', $sPASSWORD.'fttl');

			$sHashTheHash = hash('md5', $sSalt.$sPASSWORD.$sSalt);

			return $sHashTheHash;
		}
			
	}

	// ----------------test-----

	// $oCollection = new Collection();

	// $aProducts= $oCollection->grabAllProducts();

	// echo "<pre>";
	// print_r($aProducts);
	// echo "</pre>";


?>