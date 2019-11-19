/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej4-2
*/
var cadena;
do{
    cadena=prompt("Introduzca un texto");
}while(esValida(cadena) == false);

function esValida(cadena){
    var num=-1;
    num=cadena.indexOf(" ");
    
    if(num != -1){
        return false;
    }else{
        return true;
    }
}



function palindromo(cadena){
    var fin=cadena.length-1;
    for(var i=0 ; i<cadena.length ; i++,fin--){
        if(cadena[i]!=cadena[fin]){
            return false
        }
        return true;
    }
}
if(palindromo(cadena)==true){
    document.write("Es palindromo");
}else{
    document.write("No es palindromo");
}