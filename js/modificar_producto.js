"use strict"

var mensaje = document.getElementById("mensaje");

if( document.getElementById("form")){
		document.getElementById("form").onsubmit = function(){
			alert("sadad");
		var nombre = document.getElementById("producto").value;
		var precio = document.getElementById("precio").value;

		if( nombre.length < 10 ){
	 		printError(mensaje,"*El nombre del producto debe tener al menos 10 caracteres");
	 		return false;
	 	}

	 	if( nombre.length > 50 ){
	 		printError(mensaje,"*El nombre del producto debe tener menos de 50 caracteres");
	 		return false;
	 	}

	 	if( parseFloat(precio) == precio ){
	 		if( parseFloat(precio) < 0 ){	 			
	 			printError(mensaje,"*El precio no puede ser un número negativo.");
	 			return false; 					
	 		}
	 	}
	 	else{	 		 		
	 		printError(mensaje,"*Verifique el precio ingresado");
	 		return false;
	 	}
	}
}

if( document.getElementById("producto")){
	document.getElementById("producto").onclick = function(){printError(mensaje,"")};
}

if(document.getElementById("precio")){
	document.getElementById("precio").onclick = function(){printError(mensaje,"")};
}

function printError (element,text){
     element.innerHTML = text;
}