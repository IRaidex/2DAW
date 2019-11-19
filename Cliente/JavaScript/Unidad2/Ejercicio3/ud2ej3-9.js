/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-9
*/

var par=0;
var impar=0;

//recorremos todos los numeros entre 1-100 y sumamos los pares e impares
for(var i=0 ; i<=100 ; i++){
  if(i%2==0){
      par+=i;
  }else{
      impar+=i;
  }
    
}
//Mostramos
document.write("La suma de los numeors pares entre 1-100 es "+par+"<br>");
document.write("La suma de los numeors impares entre 1-100 es "+impar+"<br>");
