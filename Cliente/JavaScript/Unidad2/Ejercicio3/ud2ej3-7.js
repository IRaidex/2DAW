/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-7
*/

var num=prompt("Introduce una cantidad");
num=parseInt(num);

var billete500=0;
var billete200=0;
var billete100=0;
var billete50=0;
var billete20=0;
var billete10=0;
var billete5=0;
var moneda2=0;
var moneda1=0;

//Vamos restando a la cantidad introducimos
while(num>=500){
    billete500++;
    num=num-500;
}while(num>=200){
    billete200++;
    num=num-200;
}while(num>=100){
    billete100++;
    num=num-100;
}while(num>=50){
    billete50++;
    num=num-50;
}while(num>=20){
    billete20++;
    num=num-20;
}while(num>=10){
    billete10++;
    num=num-10;
}while(num>=5){
    billete5++;
    num=num-5;
}while(num>=2){
    moneda2++;
    num=num-2;
}while(num>=1){
    moneda1++;
    num=num-1;
}

//comprobamos cuantos billetes ha usado y mostramos
if (billete500>0){
    document.write("Billetes de 500 = " + billete500 + "<br>")
}
if (billete200>0){
    document.write("Billetes de 200 = " + billete200 + "<br>")
}
if (billete100>0){
    document.write("Billetes de 100 = " + billete100 + "<br>")
}
if (billete50>0){
    document.write("Billetes de 50 = " + billete50 + "<br>")
}
if (billete20>0){
    document.write("Billetes de 20 = " + billete20 + "<br>")
}
if (billete10>0){
    document.write("Billetes de 10 = " + billete10 + "<br>")
}
if (billete5>0){
    document.write("Billetes de 5 = " + billete5 + "<br>")
}
if (moneda2>0){
    document.write("Monedas de 2 = " + moneda2 + "<br>")
}
if (moneda1>0){
    document.write("Monedas de 1 = " + moneda1 + "<br>")
}