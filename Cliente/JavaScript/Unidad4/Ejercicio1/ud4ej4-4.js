/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-4
*/

document.write('<p id="info">Cordenadas (X,Y)</p>');

document.onmousemove= mover;

var x = 0;
var y = 0;


function mover(evento){
    x=evento.clientX;
    y=evento.clientY;
    document.getElementById("info").innerHTML = "Cordenadas ("+x+","+y+")"; 
}