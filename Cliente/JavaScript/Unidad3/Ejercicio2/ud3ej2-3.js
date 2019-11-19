/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej2-3
*/

var cadena=prompt("Introduce una frase");

cadena=cadena.toUpperCase();

for(var i=0 ; i<cadena.length ; i++){

    cadena=cadena.replace('A','a');

    cadena=cadena.replace('E','e');

    cadena=cadena.replace('I','i');

    cadena=cadena.replace('O','o');

    cadena=cadena.replace('U','u');

}

document.write(cadena);