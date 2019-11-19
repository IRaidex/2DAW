/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-2
*/

document.write('<button id="pulsame1" type="button">Boton 1</button>');
document.write('<button id="pulsame2" type="button">Boton 2</button>');
document.getElementById("pulsame1").onclick= pulsar1;
document.getElementById("pulsame2").onclick= pulsar2;


function pulsar1(){
    alert("Hola Don Pepito ");
}


function pulsar2(){
    alert("Hola Don José");
}