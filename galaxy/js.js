function onoff() {
    var x = document.getElementById("ico").value;
    if(x=="on"){
	document.getElementById("menu").hidden= true; 
	document.getElementById("ico").value = "off";
	document.getElementById("icoimg").src = "on.png";
	}
	else {
	document.getElementById("menu").hidden= false; 
	document.getElementById("ico").value = "on";
	document.getElementById("icoimg").src = "off.png";
	}
}
function sizecheck() {
    if(window.innerWidth <= 768){
	document.getElementById("menu").hidden= true;}
	else{
	document.getElementById("menu").hidden= false;}
	document.getElementById("ico").value = "off";
	document.getElementById("icoimg").src = "on.png";
}