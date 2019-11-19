/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-7
*/



document.ondblclick = aumentarVentana;

var myWindow;

var x = Math.floor(Math.random() * 1200);
var y = Math.floor(Math.random() * 1200);

myWindow = window.open("", "myWindow", "width=200,height=100");

function aumentarVentana(evento){
    var x = Math.floor(Math.random() * 1200);
    var y = Math.floor(Math.random() * 1200);
    myWindow.resizeTo(x,y);
}
