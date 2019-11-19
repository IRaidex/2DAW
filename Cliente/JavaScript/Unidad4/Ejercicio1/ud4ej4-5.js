/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-5
*/

document.getElementById("header"); 

var altura = window.innerHeight;
var anchura = window.innerWidth;

document.addEventListener("click", buscarClick);

function buscarClick(evento){
    
    var y = evento.clientY;
    var x = evento.clientX;
    
    if(y<altura/2){
        if(x<anchura/2){
            alert("CUADRANTE 1");
        }else{
            alert("CUADRANTE 2");
        }
    }else{
        if(x<anchura/2){
            alert("CUADRANTE 3");
        }else{
            alert("CUADRANTE 4");
        }
    }
    
}