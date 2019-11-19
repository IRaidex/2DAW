/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej3-1
*/

var dia=prompt("Introduzca el dia de su cumpleaños");
var mes=prompt("Introduzca el mes de su cumpleaños");
var anyo=prompt("Introduzca el año de su cumpleaños");

var fecha = new Date(anyo,mes-1,dia);

document.write(fecha+" fue ");

if(fecha.getDay()==0){
    document.write("Domingo");

}
if(fecha.getDay()==1){
    document.write("Lunes");

}
if(fecha.getDay()==2){
    document.write("Martes");

}
if(fecha.getDay()==3){
    document.write("Miercoles");

}
if(fecha.getDay()==4){
    document.write("Jueves");

}
if(fecha.getDay()==5){
    document.write("Viernes");

}
if(fecha.getDay()==6){
    document.write("Sabado");

}