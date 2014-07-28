
<?php

function encodePassword($sPASSWORD){

			$sSalt = hash(sha1, $sPASSWORD.'fttl');

			$sHashTheHash = hash(md5, $sSalt.$sPASSWORD.$sSalt);

			return $sHashTheHash;
		}


echo encodePassword("1414");

?>