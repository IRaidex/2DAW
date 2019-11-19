/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej4-1
*/


var num=prompt("Introduzca un número");
num=parseInt(num);

function primo(num){
    var i=2;
    var primo=true;

    //si el numero es mayor que 2 y el resto es cero no es primo
    while(num>i && primo==true){
        if(num%i==0){
            primo=false;
        }else{
            i++;
        }

    }
    if(primo){
        return document.write("Es primo");
    }else{
        return document.write("No es primo");
    }
}

primo(num);