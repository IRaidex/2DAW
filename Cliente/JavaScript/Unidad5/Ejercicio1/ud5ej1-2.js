/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5ej1-2.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var a=document.links;

    for(var i=0 ; i<a.length ; i++){
        a[i].innerHTML = "2ºDAW";
    }
}