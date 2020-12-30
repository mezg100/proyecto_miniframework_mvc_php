"use strict"

var eliminar = document.getElementsByClassName('eliminar');

	for( var i=0; i<eliminar.length; i++){
		eliminar[i].onclick = function(){
			var confirmation = confirm("¿Esta seguro que desea eliminar el producto seleccionado ?");
			if(!confirmation){return false;}
		}
	}
