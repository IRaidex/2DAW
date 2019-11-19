/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-6
*/

//pedimos al usuario un numero entre 1-1000
do{

    var num=prompt("Numero Incorrecto, Introduzca un número entre el 1 - 1000");
    num=parseInt(num);

}while(num>1000 || num<1)  

var i=2;
var primo=true;

//si el numero es mayor que 2 y el resto es cero no es primo
while(num>i && primo){
    if(num%i==0){
        primo=false;
    }else{
        i++;
    }

}

//Mostramos por pantalla
if(primo){
    document.write(num+" es primo");
}else{
    document.write(num+" no es primo");
} 