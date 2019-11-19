/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej2-4
*/

var cadena=prompt("Introduce una frase");

var misPalabras = cadena.split(" ");

for(var i=0 ; i<misPalabras.length ; i++){
   if(i%2==0){
       misPalabras[i]=misPalabras[i].toUpperCase();
   }else{
       misPalabras[i]=misPalabras[i].toLowerCase();
   }
}

for(var i=0; i<misPalabras.length ; i++){
    document.write(misPalabras[i]+" ");
}