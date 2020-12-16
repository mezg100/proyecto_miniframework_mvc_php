"use strict"

var mensaje = document.getElementById("mensaje");

if( document.getElementById("form-ingreso-stock") ){
	document.getElementById("form-ingreso-stock").onsubmit= function(){
		var cantidad = document.getElementById("cantidad").value;
		
		if( parseInt(cantidad) == cantidad ){
		 	if( parseInt(cantidad) < 0 ){
		 		printError(mensaje,"*Verifique los datos ingresados");
		 		return false; 					
		 	}
		 }
		 else{	 	
		 		printError(mensaje,"*Verifique los datos ingresados");
		 		return false;
		 }
	}
}

if( document.getElementById("cantidad") ){
	document.getElementById("cantidad").onclick = function(){printError(mensaje,"")};
}

function printError (element,text){
     element.innerHTML = text;
}

