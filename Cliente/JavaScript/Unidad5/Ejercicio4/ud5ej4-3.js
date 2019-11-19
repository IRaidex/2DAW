/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e4-3
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var imagenes = document.getElementsByTagName("img");

    for(var i=0 ; i<imagenes.length ; i++){
         imagenes[i].addEventListener("click",borrar);
        }

    function borrar(){
        var nodo = this.parentNode;
        nodo.remove();
    }

}
