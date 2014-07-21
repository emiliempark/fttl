<?php
	require_once("connection.php");
	require_once("model_customer.php");

	class Collection{

		static public function findCustomerByUsername($USERNAME_INPUT){
			$oConnection = new Connection();

			$sSQL= 'SELECT CustomerID
					FROM tbCustomer
					WHERE Username = "'.$USERNAME_INPUT.'"';

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
			
	}
?>