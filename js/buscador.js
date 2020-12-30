"use strict"

var mensaje = document.getElementById("mensaje");

if( document.getElementById("form-buscador") ){
	document.getElementById("form-buscador").onsubmit = function(){
	var busqueda = document.getElementById("busqueda").value;

		if(busqueda.length < 3 ){
			printError(mensaje,"*Debe ingresar al menos 3 caracteres");
			return false;
		}
	}
}

if( document.getElementById("buscador-results") ){
	document.getElementById("buscador-results").onsubmit = function(){
	var busqueda_results = document.getElementById("busqueda-results").value;

		if(busqueda_results.length < 3 ){
			printError(mensaje,"*Debe ingresar al menos 3 caracteres");
			return false;
		}
	}
}

if( document.getElementById("buscador-no-results") ){
	document.getElementById("buscador-no-results").onsubmit = function(){
	var busqueda_no_results = document.getElementById("busqueda-no-results").value;

		if(busqueda_no_results.length < 3 ){
			printError(mensaje,"*Debe ingresar al menos 3 caracteres");
			return false;
		}
	}
}

if( document.getElementById("busqueda") ){
	document.getElementById("busqueda").onclick = function(){printError(mensaje,"")};
}

if( document.getElementById("busqueda-results") ){
	document.getElementById("busqueda-results").onclick = function(){printError(mensaje,"")};
}

if( document.getElementById("busqueda-no-results") ){
	document.getElementById("busqueda-no-results").onclick = function(){printError(mensaje,"")};
}


function printError (element,text){
     element.innerHTML = text;
}

