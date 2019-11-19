/*
autor: Alex Salcedo Santamaria                    

ejercicio:  actividad2.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    for(var i = 1 ; i<6 ; i++){
        document.getElementById('p'+i).addEventListener("click",clickPar);
    }

    function clickPar(){
        this.innerHTML = "Leído";
    }

    document.getElementById("boton").addEventListener("click",clickBoton);
    function clickBoton(){
        document.getElementById("info").innerHTML ="Alejandro Salcedo Santamaria";
    }

}