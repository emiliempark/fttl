
<?php

function encodePassword($sPASSWORD){

			$sSalt = hash('sha1', $sPASSWORD.'fttl');

			$sHashTheHash = hash('md5', $sSalt.$sPASSWORD.$sSalt);

			return $sPASSWORD." : ".$sHashTheHash;
		}


echo encodePassword("cody")."<br/>";

echo encodePassword("dylan")."<br/>";
echo encodePassword("claude")."<br/>";
echo encodePassword("luc")."<br/>";
echo encodePassword("shousei")."<br/>";
echo encodePassword("niita")."<br/>";
echo encodePassword("blah")."<br/>";
echo encodePassword("emilie")."<br/>";
echo encodePassword("yoda")."<br/>";
echo encodePassword("123")."<br/>";
echo encodePassword("1414")."<br/>";
echo encodePassword("123")."<br/>";
?>