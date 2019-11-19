/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-8
*/
//pedimos cuantos numeros quiere introducir
var numeros=prompt("Introduce una cantidad de numeros a introducir");
numeros=parseInt(numeros);
var mayor;
var menor;
//creamos el array donde iran los numeros
var lista= new Array();
//introducimos los numeros en el array y sacamos el mayor y menor
for(var i=0 ; i<numeros ; i++){
    var num=prompt("Introduce un numero");
    num=parseInt(num);
    lista.push(num);
    if(i==0){
        mayor=num;
        menor=num;
    }
    if(num>mayor){
        mayor=num;
    }else if(num<menor){
        menor=num;
    }
    
}
//recorremos el array y mostramos los numeros indicando el mayor y menor
for(var j=0 ; j<numeros ; j++){
    if(lista[j]==menor){
        document.write(lista[j]+" <- Menor <br>");
    }else if(lista[j]==mayor){
        document.write(lista[j]+" <- Mayor <br>");
    }else{
        document.write(lista[j]+" <br>");
    }
}