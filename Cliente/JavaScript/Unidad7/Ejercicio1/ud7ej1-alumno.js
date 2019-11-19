/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej1 - alumno.js
*/

class Alumno{
    
    constructor(dni,nombre,notaMedia){
        this.dni = dni;
        this.nombre = nombre;
        this.notaMedia = notaMedia;
    }
    
    toString(){
        return this.dni + " " + this.nombre + " " + this.notaMedia;
    }
    
    modNota(notaMedia){
        this.notaMedia = notaMedia;
    }
    
}