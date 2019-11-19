/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud8ej6.js
*/


var personaje = JSON.parse(guardar);
document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){
 
    var div = document.getElementById("info").innerHTML = "Nombre: "+personaje.nombre+"<br>Apellido: "+personaje.apellido+"<br>Email: "+personaje.email+"<br>Telefono: "+personaje.telefono+"<br>Movil: "+personaje.movil+"<br>Direccion: "+personaje.direccion+"<br>Provincia: "+personaje.provincia+"<br>Localidad: "+personaje.localidad;
    

}