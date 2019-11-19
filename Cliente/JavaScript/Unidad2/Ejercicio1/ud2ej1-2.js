/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej1-2
*/

var num1;
num1=prompt("Introduzca un número");
var num2;
num2=prompt("Introduzca un número");
var num3;
num3=prompt("Introduzca un número");

num1=parseInt(num1);
num2=parseInt(num2);
num3=parseInt(num3);

var ordenada = new Array();

if(num1>num2 && num1>num3){
    ordenada.push(num1);
    if(num2>num3){
        ordenada.push(num2);
        ordenada.push(num3);
    }else{
        ordenada.push(num3);
        ordenada.push(num2);
    }
}else if(num2>num1 && num2>num3){
    ordenada.push(num2);
    if(num1>num3){
        ordenada.push(num1);
        ordenada.push(num3);
    }else{
        ordenada.push(num3);
        ordenada.push(num1);
    }
}else if(num3>num1 && num3>num2){
    ordenada.push(num3);
    if(num1>num2){
        ordenada.push(num1);
        ordenada.push(num2);
    }else{
        ordenada.push(num2);
        ordenada.push(num1);
    }
}

for(var i=0 ; i<ordenada.length ; i++){
    document.write(ordenada[i]+" ");
}
                   
document.write(" - ");
                   
for(var i=2 ; i>=0 ; i--){
    document.write(ordenada[i]+" ");
}