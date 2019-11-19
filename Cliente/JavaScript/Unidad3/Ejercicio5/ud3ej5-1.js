/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej3-1
*/

var ramdom=parseInt((Math.random()*50)+1);

for(var i=0 ; i<5 ; i++){
    var num=prompt("Introduce un numero del 1 al 50 ");
    num=parseInt(num);
    if(ramdom==num){
        document.write("Has acertado! <br>");
        break;
    }else{
        if(num>ramdom){
            document.write("El numero es mas pequeño <br>");
        }else{
            document.write("El numero es mas grande <br>");
        }
    }

}