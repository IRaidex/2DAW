/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej3-2
*/

var anyo=prompt("Introduce un año");
anyo=parseInt(anyo);

var fecha=new Date(anyo,1,29);

document.write("El año "+ anyo);
if(fecha.getDate()!=29){
    document.write(" No");
}
document.write(" Es bisiesto")

/*if (((anyo % 4 == 0) && (anyo % 100 != 0 )) || (anyo % 400 == 0)){
    document.writeln( anyo + ' Es bisiesto. ');
  }else{
       document.writeln( anyo + ' No es bisiesto. ');
  }*/