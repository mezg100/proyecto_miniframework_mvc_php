"use strict"

var mensaje = document.getElementById('mensaje');

    document.getElementById('ingreso').onclick = function(){
        var email = document.getElementById('email').value;
        var password = document.getElementById("password").value;
        var valid1 = 0;

        if( email.length == 0 ){
            printError(mensaje,"Debe ingresar el Email");
            return false;
        }

        if( email.length < 8 ){
            printError(mensaje,"Verifique el Email ingresado");
            return false;
        }

        if( email.length > 200 ){
                printError(mensaje,"Verifique el Email ingresado");
                return false;
        }

        for( var i=0 ; i<email.length;  i++ ){
            if(email.substr(i,1) == "@"){ valid1++ }
        }

        if( valid1 != 1 ){
            printError(mensaje,"Verifique el Email ingresado");
            return false;
 	    }

        if(password.length == 0){
            printError(mensaje,"Debe ingresar una contraseña");
	        return false;
	    }

        if(password.length < 5 ){
            printError(mensaje,"La contraseña debe tener al menos 5 caracteres");
            return false;
        }
        if(password.length > 40 ){
            printError(mensaje,"Verifique la contraseña ingresada");
            return false;
        }
}

    document.getElementById("email").onclick = function(){printError(mensaje,"")};
    document.getElementById("password").onclick = function(){printError(mensaje,"")};


function printError (element,text){
     element.innerHTML = text;
}
