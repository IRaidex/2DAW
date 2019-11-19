/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-4
*/

var i=0;
var j=0;

//Creamos las tablas para rellenarlas
for(i=1; i<=10; i++){
    document.write("<table>");
    for(j=1; j<=10; j++){
        var resultado=i*j;
        document.write("<tr>");
        document.write("<td>");
        document.write(i+"x"+j+"<br>");
        document.write("</td>");
        document.write("<td>");
        document.write(resultado+"<br>");
        document.write("</td></tr>");
    }
}
//cerramos la tabla
document.write("</table>");