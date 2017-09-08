function generate() {
	var string = document.getElementById("inputString").value;
	var resultstringlen = document.getElementById("inputLength").value;
	var resultstring = "";

	for(var i=0; i<resultstringlen; i++) {
		var randnum = Math.floor(Math.random() * (string.length - 1)) + 1;
		var randchar = string[randnum];
		resultstring += randchar;	
	}
	
	document.getElementById("result").innerHTML = resultstring;
}
