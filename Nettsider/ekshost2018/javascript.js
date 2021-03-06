console.log("Code is inefficient on purpose to show competanse and understanding");
barn = false
voksen = false
currentActiveHytte = ""
currentActiveSeason = ""

hytteInfo = {
	"grantoppen": {"jul": false, "vinter":false, "påske":true},
	"granbo":     {"jul": true,  "vinter":true,  "påske":false},
	"granstua":   {"jul": false, "vinter":true,  "påske":true},
	"granhaug":   {"jul": false, "vinter":true,  "påske":false}
}
const hytter = ["granbo","granstua", "grantoppen", "granhaug"]

window.onload = function () {
    currentPris = 0
    agePrice = 0
	avslag = 0
	
    pris = document.getElementById('pris')
    dayRange = document.getElementById('dayRange')
	


	hytter.forEach(function (item, index){
		try{
			document.getElementById(item).addEventListener("click", (event) => {
				currentActiveHytte = item
				if(document.getElementById(item).style.backgroundColor == "green"){
					setBestillButton(true)
				}else{
					setBestillButton(false)
				}
				
				
				previewHytte(item)})
		}catch(error){
			console.log("Expected Error, used to show competanse")
		}
	});



	try{
		dayRange.addEventListener('change', (event) => {
			document.getElementById('mineDager').innerHTML = dayRange.value
			if (dayRange.value > 1){
				document.getElementById("moDays").style.display = "inline";
			}else{
				document.getElementById("moDays").style.display = "none";
			}
			if (barn) {
				currentPris = 100 * dayRange.value
				discountCheck = checkPriceForDiscount(currentPris, "barn")
			} else {
				currentPris = 200 * dayRange.value
				discountCheck = checkPriceForDiscount(currentPris, "voksen")
			}
			if(discountCheck != false){
				currentPris = currentPris - discountCheck
			}
			pris.innerHTML = currentPris;
		});
		childButton = document.getElementById('childButton')


		childButton.addEventListener('click', function (event) {
			event.preventDefault();
			if (barn){
				barn = false
				currentPris = 200 * dayRange.value
				discountCheck = checkPriceForDiscount(currentPris, "voksen")
				this.style.background = "white";
			}else{
				barn = true
				currentPris = 100 * dayRange.value
				discountCheck = checkPriceForDiscount(currentPris, "barn")
				this.style.background = "orange";
			}
			if(discountCheck != false){
				currentPris = currentpris - discountCheck
			}
			
			pris.innerHTML = currentPris

		});
	}catch(error){
		console.log("expected error, used to show competanse")
	}
	seasonChange(document.getElementById("seasons"))
}

function checkPriceForDiscount(price, ageGroup){
	if(ageGroup == "voksen"){
		if(price > 1000){
			avslag = price-1000
			document.getElementById("avslagBox").style.display = "block";
			document.getElementById("avslagBox").innerHTML = "Din pris går over 1000 kroner og du får " + avslag + " kroner I avslag";
			return avslag
		}
	}else if(ageGroup == "barn"){
		if(price > 500){
			avslag = price-500
			document.getElementById("avslagBox").style.display = "block";
			document.getElementById("avslagBox").innerHTML = "Din pris går over 500 kroner og du får " + avslag + " kroner I avslag";
			return avslag
		}
	}
	document.getElementById("avslagBox").style.display = "none";
	return false
	
}


function previewHytte(hytte){
	document.getElementById("bildeBackground").style.display = "inline";
	document.getElementById("bildeWindow").style.display = "flex";

	document.getElementById("hytteInfoBox").style.display = "block"
	
	if(hytte == "granbo"){
	document.getElementById("granboImageContainer").style.display = "grid";
	document.getElementById("noHytteText").style.display = "none";		
		document.getElementById("hytteNavn").innerHTML = "Granbo";
		document.getElementById("standardInfoText").innerHTML = "Middels";
		document.getElementById("sengeInfoText").innerHTML = "6";
		document.getElementById("badInfoText").innerHTML = "Nei";
		document.getElementById("ukesPrisText").innerHTML = "15 000 Kr"

		
		
	}else if (hytte == "granstua"){
	document.getElementById("granstuaImageContainer").style.display = "grid";
	document.getElementById("noHytteText").style.display = "none";
		
		document.getElementById("hytteNavn").innerHTML = "Granstua";
		document.getElementById("standardInfoText").innerHTML = "Høy";
		document.getElementById("sengeInfoText").innerHTML = "4";
		document.getElementById("badInfoText").innerHTML = "Ja";
		document.getElementById("ukesPrisText").innerHTML = "12 000 Kr"
		
	}else if(hytte == "grantoppen"){
		
		document.getElementById("hytteNavn").innerHTML = "Grantoppen";
		document.getElementById("standardInfoText").innerHTML = "Lav";
		document.getElementById("sengeInfoText").innerHTML = "8";
		document.getElementById("badInfoText").innerHTML = "Nei";
		document.getElementById("ukesPrisText").innerHTML = "16 000 Kr"
		
	}else{
		
		document.getElementById("hytteNavn").innerHTML = "Granhaug";
		document.getElementById("standardInfoText").innerHTML = "Høy";
		document.getElementById("sengeInfoText").innerHTML = "10";
		document.getElementById("badInfoText").innerHTML = "Ja";
		document.getElementById("ukesPrisText").innerHTML = "30 0000 Kr"
	}
}

function removeBildeWindow(){
	document.getElementById("noHytteText").style.display = "inline";
	document.getElementById("bildeBackground").style.display = "none";
	document.getElementById("bildeWindow").style.display = "none";
	document.getElementById("granstuaImageContainer").style.display = "none";
	document.getElementById("granboImageContainer").style.display = "none";
}

function turnBig(theImage,alt = ""){
	currentSRC = theImage.src
	theImage.src = document.getElementById("bigImg" + alt).src;
	document.getElementById("bigImg" + alt).src = currentSRC
}

function seasonChange(options){
	hytter.forEach(function (item){
		if(hytteInfo[item][options.value]){			
			document.getElementById(item).style.backgroundColor = "green";
		}else{
			document.getElementById(item).style.backgroundColor = "red";
		}
	});
	currentActiveSeason = options.value
}

function setBestillButton(state){
	bestillBtn = document.getElementById("bestillButton")
	if(state){
		bestillBtn.innerHTML = "Bestill"
		bestillBtn.style.backgroundColor = "green"
		bestillBtn.disabled = false
	}else{
		bestillBtn.innerHTML = "Utleid"
		bestillBtn.style.backgroundColor = "red"
		bestillBtn.disabled = true
	}
	
}


function bestillClick(){
	hytteInfo[currentActiveHytte][currentActiveSeason] = false 
	document.getElementById(currentActiveHytte).style.backgroundColor = "red"
	
	bestillBtn = document.getElementById("bestillButton")
	bestillBtn.innerHTML = "Utleid"
	bestillBtn.style.backgroundColor = "red"
	bestillBtn.disabled = true
	
}

function back(){
	location.href="index.html"
}

function showBGS(){
	document.getElementsByClassName("BGS")[0].style.display = "block"
	
}
function showBGSheis(){
	document.getElementsByClassName("BGS")[0].style.display = "block"
	
}


document.onmousedown = function(e) {
    document.getElementsByClassName("BGS")[0].style.display = "none"
};



