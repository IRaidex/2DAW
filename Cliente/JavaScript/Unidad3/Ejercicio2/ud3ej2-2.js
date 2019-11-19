/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej2-2
*/

var frase=prompt("Introduce una frase");
var letra=prompt("Introduce una letra");

document.write(frase+" "+frase.length+"<br>");
document.write(frase+" "+frase.charAt(0)+"<br>");
document.write(frase+" "+frase.charAt(frase.length-1)+"<br>");
document.write(frase+" "+frase.charAt(frase.length/2)+"<br>");

var misPalabras = frase.split(" ");

for(var i=0; i<misPalabras.length ;i++){
    document.write(frase+" "+misPalabras[i][0]+"<br>");       
}
var letraContador=0;

for(var i=0 ; i<frase.length ; i++){
    if(letra==frase[i]){
        letraContador++;
    }
}

document.write("En la frase: "+frase+". La letra "+letra+" aparece "+letraContador+" veces");