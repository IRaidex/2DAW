/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej2-1
*/
do{
    var menu = prompt("Elija la operación a realizar\n 1.Suma\n 2.Resta\n 3.Multiplicación\n 4.Division\n 5.Potencia\n");
}while(menu>5 || menu<1);

var num1=prompt("Introduzca un número");
var num2=prompt("Introduzca un número");

if(num1==""){
    alert("tienes que introducir un numero");
}
if(num2==""){
    alert("tienes que introducir un numero");
}

menu=parseInt(menu);
num1=parseInt(num1);
num2=parseInt(num2);

var suma=num1+num2;
var resta=num1-num2;
var multiplicacion=num1*num2;
var division=num1/num2;
//var potencia=num1**num2;

switch(menu){
    case 1: document.write("La suma de "+num1+" y "+num2+" es "+suma); break;
    case 2: document.write("La resta de "+num1+" y "+num2+" es "+resta); break;
    case 3: document.write("La multiplicación de "+num1+" y "+num2+" es "+multiplicacion); break;
    case 4: if(num1==0 || num2==0){
                document.write("No se puede dividir por 0");
            }else{
                document.write("La división de "+num1+" y "+num2+" es "+division); break;
            }
    case 5: document.write("La potencia de "+num1+" y "+num2+" es "+potencia); break;
}