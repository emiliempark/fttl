function checkFilled(sInputId){

	var bValid = false;

	var oInput = document.getElementById(sInputId);

	var sInputValue= oInput.value;

	var oOutputMessage = document.getElementById(sInputId+"Message");

	if(sInputValue.length == 0){

		oOutputMessage.innerHTML = "Must not be empty";
		oOutputMessage.className = "message-error";

	}else{

		oOutputMessage.innerHTML = "Thank you";
		oOutputMessage.className = "message-success";

		bValid = true;
	}

	return bValid;
}

function checkName(sInputId){

	var bVaild = false;

	var bFilled = checkFilled(sInputId);

	
	if(bFilled==true){

		var oInput = document.getElementById(sInputId);
		
		var sInputValue = oInput.value;

		var oOutputMessage = document.getElementById(sInputId + "Message");

		
		//check for valid input

		var oRegExp = new RegExp("[^a-zA-Z]");

		if(oRegExp.test(sInputValue)==false){

			oOutputMessage.innerHTML = "Thank you";
			oOutputMessage.className = "message-success";

			bValid = true;

		}else{

			oOutputMessage.innerHTML = "Names must be alphabetic";
			oOutputMessage.className = "message-error";
		}
	}
}



function checkEmail(sInputID){

	var bValid = false;

	var bFilled = checkFilled(sInputID); //today

	if(bFilled == true){

		var oInput = document.getElementById(sInputID);
		var sInputValue = oInput.value;

		var oOutputMessage = document.getElementById(sInputID+"Message");
	
	

		var oRegExp = new RegExp("^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$");

		if(oRegExp.test(sInputValue)==true){
			oOutputMessage.innerHTML = "Thank you!";
			oOutputMessage.className = "message-success";

			bValid = true;

		}else{
			oOutputMessage.innerHTML = "Must be a valid email";
			oOutputMessage.className = "message-error";
		}

	}
	return bValid;

}
function checkPhone(sInputId){

	var bVaild = false;

	var bFilled = checkFilled(sInputId);

	
	if(bFilled==true){

		var oInput = document.getElementById(sInputId);
		
		var sInputValue = oInput.value;

		var oOutputMessage = document.getElementById(sInputId + "Message");

		
		//check for valid input

		var oRegExp = new RegExp("[^a-zA-Z]");

		if(oRegExp.test(sInputValue)==true){

			oOutputMessage.innerHTML = "Thank you";
			oOutputMessage.className = "message-success";
			bValid = true;

		}else{

			oOutputMessage.innerHTML = "Only numbers please";
			oOutputMessage.className = "message-error";
		}
	}
}

function checkAll(){


	var bValidFirstName = checkName("firstName"); // input id ="firstName"
	var bValidLastName = checkName("lastName"); // input id ="lasttName"
	var bValidEmail = checkEmail("emailForm"); // input id ="email" // input id ="password"
	var bValidPhone = checkEmail("phone"); 


	var bValid = bValidFirstName && bValidLastName && bValidEmail && bValidEmail;

	return bValid; 
}


// --------------------------------------------------------

var sInput = document.getElementById("firstname");

sInput.onblur = function(){
	checkFilled(sInput);
}










