/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-6
*/

document.write(' <button id="abrir" type="button">Abrir</button> ');
document.write(' <button id="cerrar" type="button">Cerrar</button> ');

document.getElementById("abrir").onclick = abrirVentana;
document.getElementById("cerrar").onclick = cerrarVentana;

var myWindow;

function abrirVentana(evento){
   myWindow = window.open("", "myWindow", "width=200,height=100");
}

function cerrarVentana(evento){
    myWindow.close();
}
