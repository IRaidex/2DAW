/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej1-1
*/

var numero1;
numero1=prompt("Introduzca un número");
var numero2;
numero2=prompt("Introduzca un número");

numero1=parseInt(numero1);
numero2=parseInt(numero2);

var mayor;

if(numero1==numero2){
    document.write("Los numeros son iguales");
}else{
    if(numero1>numero2){
        mayor=numero1;
    }else{
        mayor=numero2;
    }
    document.write("Los numeros no son iguales y el mayor es " + mayor);
}