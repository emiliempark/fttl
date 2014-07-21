<?php
	require_once("connection.php");

	class Customer{

		private $iCustomerID;
		private $sFirstName;
		private $sLastName;
		private $sEmail;
		private $sAddress;
		private $sPhone;
		private $sUsername;
		private $sPassword;
		private $bExisting;

		public function __construct(){
			$this->iCustomerID = 0;
			$this->sFirstName = "";
			$this->sLastName = "";
			$this->sEmail = "";
			$this->sAddress = "";
			$this->sPhone = "";
			$this->sUsername = "";
			$this->sPassword = "";
			$this->bExisting = false;
		}

		public function load($CUSTOMER_ID){
			$oConnection = new Connection();

			$sSQL = "SELECT CustomerID, FirstName, LastName, Email, Address, Phone, Username, Password
					FROM tbCustomer
					WHERE CustomerID=".$CUSTOMER_ID;

			$oResult = $oConnection->query($sSQL);

			$aCustomer = $oConnection->fetch_array($oResult);
			$this->iCustomerID	= $aCustomer["CustomerID"];
			$this->sFirstName	= $aCustomer["FirstName"];
			$this->sLastName	= $aCustomer["LastName"];
			$this->sEmail = $aCustomer["Email"];
			$this->sAddress = $aCustomer["Address"];
			$this->sPhone = $aCustomer["Phone"];
			$this->sUsername = $aCustomer["Username"];
			$this->sPassword = $aCustomer["Password"];

			$this->bExisting = true;

			$oConnection -> close_connection();
		}

		public function save(){

			$oConnection = new Connection();

			if($this->bExisting == false){

				$sSQL = "INSERT INTO  tbcustomer (
						FirstName, LastName, Email, Address, Phone, Username ,Password 
						)
						VALUES (
						'".$this->sFirstName."',
						'".$this->sLastName."',
						'".$this->sEmail."',
						'".$this->sAddress."', 
						'".$this->sPhone."',
						'".$this->sUsername."',
						'".$this->sPassword."'
						)";

				$bResult = $oConnection->query($sSQL);


				if($bResult == true){

					$this->iCustomerID = $oConnection->get_insert_id();
					$this->bExisting = true;

				}else{

					die($sSQL. " has failed to register.");
				}

			}else{
				
				$sSQL = "UPDATE  tbcustomer 
						SET  FirstName =  '".$this->sFirstName."',
							LastName =  '".$this->sLastName."',
							Email =  '".$this->sEmail."',
							Address =  '".$this->sAddress."',
							Phone =  '".$this->sPhone."',
							UserName =  '".$this->sUsername."',
							Password =  '".$this->sPassword."' 
						WHERE  tbcustomer.CustomerID =".$this->iCustomerID;

				$bResult = $oConnection->query($sSQL);

				if($bResult == false){

					die($sSQL." failed");
				
				}
			}
		}

		
		public function __get($VAR){
			switch($VAR){
				case "CustomerID":
					return $this->iCustomerID;
					break;
				case "FirstName":
					return $this->sFirstName;
					break;
				case "LastName":
					return $this->sLastName;
					break;
				case "Email":
					return $this->sEmail;
					break;
				case "Address":
					return $this->sAddress;
					break;
				case "Phone":
					return $this->sPhone;
					break;
				case "Username":
					return $this->sUsername;
					break;
				case "Password":
					return $this->sPassword;
					break;
				default:
					die("Failed to get customer data.");
			}
		}
		public function __set($VAR, $VALUE){
			switch($VAR){
				case "FirstName":
					$this->sFirstName = $VALUE;
					break;
				case "LastName":
					$this->sLastName = $VALUE;
					break;
				case "Email":
					$this->sEmail = $VALUE;
					break;
				case "Address":
					$this->sAddress = $VALUE;
					break;
				case "Phone":
					$this->sPhone = $VALUE;
					break;	
				case "Username":
					$this->sUsername = $VALUE;
					break;
				case "Password":
					$this->sPassword = $VALUE;
					break;
				default:
					die($VAR." does not exist in customer.");						
			}
		}
	}

	// ---------------------test

	// $oCustomer = new Customer();
	// $oCustomer->load(1);

	// echo "<pre>";
	// print_r($oCustomer);
	// echo "</pre>";

	// -----------------------test

	// $oCustomer = new Customer();

	// $oCustomer->FirstName = "hello";
	// $oCustomer->LastName = "hello";
	// $oCustomer->Email = "hello";
	// $oCustomer->Address = "hello";
	// $oCustomer->Phone = "1234567";
	// $oCustomer->Username = "hello";
	// $oCustomer->Password = "hello";

	// $oCustomer->save();

	// print_r($oCustomer);
?>






