/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-1
*/

//pedimos el nombre y lo mostramos
var producto=prompt("Introduzca el nombre del producto");
//producto.parseFromString(producto);
document.write("El producto es "+producto);

var mayor=0;
var menor=0;
var estaMayor;
var estaMenor;
//Pedimos 3 precios y 3 establecimientos
for(var i=0 ; i<=2 ; i++){
    var precio=prompt("Introduzca el precio del producto");
    var establecimiento=prompt("Introduzca el establecimiento del producto");
    
    //En la primera pasada damos valor a mayor y menor
    if(i==0){
        precio=parseInt(precio);
        mayor=precio;
        menor=precio;
        estaMayor=establecimiento;
        estaMenor=establecimiento;
    }
    //sacamos el precio mayor y menor
    if(precio>mayor){
        mayor=precio;
        estaMayor=establecimiento;
    }else if(precio<menor){
        menor=precio;
        estaMenor=establecimiento;
    }

}

//Mostramos resultados
document.write("<br> El establecimiento mas caro es "+estaMayor+" "+mayor);
document.write("<br> El establecimiento mas barato es "+estaMenor+" "+menor);
