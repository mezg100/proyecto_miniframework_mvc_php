
"use strict"

	var mensaje = document.getElementById("mensaje");

	document.getElementById("form-alta").onsubmit= function(){
	 	var producto_id = document.getElementById("producto_id").value;
	 	var nombre = document.getElementById("nombre").value;
	 	var precio = document.getElementById("precio").value;	 

	 	if( parseInt(producto_id) == producto_id ){
	 		if( parseInt(producto_id) < 0 ){
	 			printError(mensaje,"El codigo del producto debe ser un entero positivo");
	 			return false; 					
	 		}
	 	}
	 	else{	 	
	 		printError(mensaje,"*El codigo del producto debe ser un entero positivo");
	 		return false;
	 	}

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

	document.getElementById("producto_id").onclick = function(){printError(mensaje,"")};
	document.getElementById("nombre").onclick = function(){printError(mensaje,"")};
	document.getElementById("precio").onclick = function(){printError(mensaje,"")};

function printError (element,text){
     element.innerHTML = text;
}


