/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej1 - gestion.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var instituto = new Instituto("IES Gonzalo Anaya",10,100);
    var alum1 = new Alumno("03153748B","Alex","5");
    var alum2 = new Alumno("12353748B","Pau","8");
    
    instituto.modAlumnos(102);
    alum2.modNota(9);
    
    console.log(instituto.toString());
    console.log(alum1.toString());
    console.log(alum2.toString());
    
}
