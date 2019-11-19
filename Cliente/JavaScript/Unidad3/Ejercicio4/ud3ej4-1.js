/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej4-1
*/

var nombres=new Array();
do{
    var nombre=prompt("Introduzca un nombre o escriba 'cero'");
    if(nombre!="cero"){
        nombres.push(nombre);
    }
}while(nombre != "cero");

for(var i=0 ;i<nombres.length ; i++){
    document.write(nombres[i]+" ");
}
document.write("<br>")
for(var j=0 ;j<nombres.length ; j++){
    
    document.write(nombres[j]+"-");
}
document.write("<br>")
for(var k=0 ;k<nombres.length ; k++){
    nombres.sort();
    document.write(nombres[k]+" ");
}
document.write("<br>")
for(var l=0 ;l<nombres.length ; l++){
    nombres.sort();
    nombres.reverse();
    document.write(nombres[l]+" ");
}