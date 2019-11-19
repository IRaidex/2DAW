/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e4-2
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var imagenes = document.getElementsByTagName("img");

    for(var i=0 ; i<imagenes.length ; i++){
         imagenes[i].addEventListener("click",borrar);
        }

    function borrar(){
        this.remove();
    }

}
