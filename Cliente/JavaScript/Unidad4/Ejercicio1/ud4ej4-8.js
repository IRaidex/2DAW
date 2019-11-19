/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-8
*/


document.write('<div id="ejercicio"></div>');
document.write('<form action="ejemplo.php" method="get">');
document.write('<input type="text" name="nombre" size="40" id="texto">');
document.write('</form>');

document.getElementById("texto").onfocus=entrarInput;
document.addEventListener("blur",salirInput );

function salirInput(evento){
    document.getElementById("ejercicio").innerHTML =  document.getElementById("texto").value;
}

function entrarInput(evento){
    document.getElementById("ejercicio").innerHTML =  document.getElementById("texto").innerHTML="Preparados para escribir";
}