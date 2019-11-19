/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej2-2
*/

do{
    var dia = prompt("Introduzca un numero equivalente al dia");
}while(dia>7 || dia<1);

do{
    var mes = prompt("Introduzca un numero equivalente al mes");
}while(mes>12 || mes<1);

if(dia==""){
    alert("tienes que introducir un numero");
}
if(mes==""){
    alert("tienes que introducir un numero");
}

dia=parseInt(dia);
mes=parseInt(mes);

var diaSem;

switch(dia){
    case 1: document.write("Lunes"); break;
    case 2: document.write("Martes"); break;
    case 3: document.write("Miercoles"); break;
    case 4: document.write("Jueves"); break;
    case 5: document.write("Viernes"); break;
    case 6: document.write("Sabado"); break;
    case 7: document.write("Domingo"); break;
}

switch(mes){
    case 1: document.write(" de Enero"); break;
    case 2: document.write(" de Febrero"); break;
    case 3: document.write(" de Marzo"); break;
    case 4: document.write(" de Abril"); break;
    case 5: document.write(" de Mayo"); break;
    case 6: document.write(" de Junio"); break;
    case 7: document.write(" de Julio"); break;
    case 8: document.write(" de Agosto"); break;
    case 9: document.write(" de Septiembre"); break;
    case 10: document.write(" de Octubre"); break;
    case 11: document.write(" de Noviembre"); break;
    case 12: document.write(" de Diciembre"); break;
}

