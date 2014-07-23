
// var oGallery = document.getElementById("gallery");

// oGallery.style.border = "1px black solid";

var oGallery = document.getElementById("imgViewer");

var aImages = oGallery.children;

var oGoLeft = document.getElementById("goLeft");
var oGoRight = document.getElementById("goRight");

oGoLeft.onclick = function(){
	var iCurrentShow = 0;

	for(var iCount = 0; iCount<aImages.length; iCount--){
		
		if(aImages[iCount].className == "show"){
			iCurrentShow = iCount;
			aImages[iCount].className = "";
		}
	}

	iCurrentShow --;

	if(iCurrentShow <= 0 ){
		iCurrentShow = aImages.length;
	}

	aImages[iCurrentShow].className = "show";

};

oGoRight.onclick = function(){
	var iCurrentShow = 0;

	for(var iCount=0; iCount<aImages.length ;iCount++){
		if(aImages[iCount].className == "show"){
			iCurrentShow = iCount;
			aImages[iCount].className = "";
		}

	}

	iCurrentShow ++;
	if(iCurrentShow >= aImages.length ){
		iCurrentShow = 0;
	}

	aImages[iCurrentShow].className = "show";

};

