/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej4-2
*/

var cadena=prompt("Introduce nombre,apellido1,apellido2,telefono,gmail");

var persona=cadena.split("$");

document.write("Nombre: "+persona[0]+"<br>");
document.write("Apellidos: "+persona[1]+" "+persona[2]+"<br>");
document.write("Telefono: "+persona[3]+"<br>");
document.write("E-mail: "+persona[4]+"<br>");
