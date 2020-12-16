"use strict"

var mensaje = document.getElementById("mensaje");

if( document.getElementById("form-buscador") && !document.getElementById("form-buscador2")){
	document.getElementById("form-buscador").onsubmit = function(){
	var busqueda = document.getElementById("busqueda").value;

		if(busqueda.length < 3 ){
			printError(mensaje,"*Debe ingresar al menos 3 caracteres");
			return false;
		}
	}
}



if( document.getElementById("busqueda") ){
	document.getElementById("busqueda").onclick = function(){printError(mensaje,"")};
}

function printError (element,text){
     element.innerHTML = text;
}

