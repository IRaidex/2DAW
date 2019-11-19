/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej2-vuelo-clase.js
*/

class Vuelo{
    constructor(codigo,horaLlegada,horaSalida,finalizado){
        this.codigo = codigo;
        this.horaLlegada = horaLlegada;
        this.horaSalida = horaSalida;
        this.finalizado = finalizado;
    }
    
    toString(){
        return "Codigo: "+this.codigo+"<br>Hora de Llegada: "+this.horaLlegada+"<br>Hora de Salida: "+this.horaSalida+"<br>Finalizado: "+this.finalizado+"<br>";
    }
    
    modSalida(horaSalida){
        this.horaSalida = horaSalida;
    }

    modLlegada(horaLlegada){
        this.horaLlegada = horaLlegada;
    }

    modFinalizado(finalizado){
        this.finalizado = finalizado;
    }

}