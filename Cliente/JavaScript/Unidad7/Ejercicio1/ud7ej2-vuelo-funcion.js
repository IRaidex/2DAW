/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej2-vuelo-funcion.js
*/

function Vuelo2(codigo,horaLlegada,horaSalida,finalizado){
    this.codigo = codigo;
    this.horaLlegada = horaLlegada;
    this.horaSalida = horaSalida;
    this.finalizado = finalizado;

    this.toString = function toString(){
        return "Codigo: "+this.dni+" Hora de Llegada: "+this.horaLlegada+" Hora de Salida: "+this.horaSalida+" Finalizado: "+this.finalizado+"<br>";
    }

    this.modSalida = function modSalida(horaSalida){
        this.horaSalida = horaSalida;
    }

    this.modLlegada = function modLlegada(horaLlegada){
        this.horaLlegada = horaLlegada;
    }

    this.modFinalizado = function modFinalizado(finalizado){
        this.finalizado = finalizado;
    }
}