/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-2
*/

var num=prompt("Introduzca un número");

//Pedira un numero hasta que ponga salir
while(num!="salir"){
    num=parseInt(num);
    //Si introduce un 0 volvera a pedirlo
    if(num==0){
        var num=prompt("Introduzca un número diferente a 0");
    }else{
        //sacamos el par e impar
        var resultado=num%2;
        if(resultado==0){
            document.write(num+" es par<br>");
        }else{
            document.write(num+" es impar<br>");
        }
        var num=prompt("Introduzca un número");
    }
}