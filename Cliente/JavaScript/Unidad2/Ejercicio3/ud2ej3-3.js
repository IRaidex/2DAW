/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-3
*/

var num=prompt("Introduzca un número");
num=parseInt(num);
var i=0;

//creamos la tabla de multiplicar y recorremos para rellenarla
document.write("<table>");
for(i=0; i<=10; i++){
    var resultado=num*i;
    document.write("<tr>");
    document.write("<td>");
    document.write(num+"x"+i+"<br>");
    document.write("</td>");
    document.write("<td>");
    document.write(resultado+"<br>");
    document.write("</td></tr>");
}
//Cerramos la tabla
document.write("</table>");