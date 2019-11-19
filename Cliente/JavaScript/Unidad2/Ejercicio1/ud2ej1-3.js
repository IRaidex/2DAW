/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej1-3
*/

var num1;
var num2;

/*do {
    num1=prompt("Introduzca un número");
    num1=parseInt(num1);
} while (num1==0);*/

num1=prompt("Introduzca un número");
num1=parseInt(num1);

num2=prompt("Introduzca un número");
num2=parseInt(num2);

var suma = num1+num2;
var resta = num1-num2;
var producto = num1*num2;


if(num1==0 || num2==0){
    var division = "No se puede dividir por 0";
}else{
    var division = num1/num2;
}

alert("Suma: "+num1+"+"+num2+":"+suma+"\nResta: "+num1+"-"+num2+":"+resta+"\nProducto: "+num1+"*"+num2+":"+producto+"\nDivision: "+num1+"/"+num2+":"+division);
console.log("Suma: "+num1+"+"+num2+":"+suma+"\nResta: "+num1+"-"+num2+":"+resta+"\nProducto: "+num1+"*"+num2+":"+producto+"\nDivision: "+num1+"/"+num2+":"+division);

