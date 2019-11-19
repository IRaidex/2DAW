/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud6ej2-2.js
*/


document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var selector = document.getElementById("serie");
    selector.addEventListener("change",comprobar);

    function comprobar(){
        
        var opciones = document.getElementById("personaje").getElementsByTagName("option");
        for(var i=opciones.length-1 ; i>=0 ; i--){
            
            opciones[i].remove(i);
        }
        
        
        for(var i=0 ; i<personajes.length ; i++){
            var option = document.createElement("option");
            option.innerHTML = personajes[this.selectedIndex-1][i];
            option.setAttribute("value","personaje"+i);
            document.getElementById("personaje").appendChild(option);
        }

    }
}
