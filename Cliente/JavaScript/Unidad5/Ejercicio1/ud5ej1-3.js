/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5ej1-3.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var parrafos=document.querySelectorAll(".resaltado p");
    
    for(var i=0 ; i<parrafos.length ; i++){
        parrafos[i].innerHTML = "Contenido Censurado";
    }
}