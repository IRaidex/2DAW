/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej1 - instituto.js
*/


function Instituto(nombre,numAulas,numAlumnos){
    this.nombre = nombre;
    this.numAulas = numAulas;
    this.numAlumnos = numAlumnos;
    
    this.toString = function toString(){
        return this.nombre+" "+this.numAulas+" "+this.numAlumnos;
    }
    
    this.modAlumnos = function modAlumnos(numAlumnos){
        this.numAlumnos = numAlumnos;
    }
    
}