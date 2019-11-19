/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e4-1
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    document.addEventListener("dblclick",doubleClic);
    
    function doubleClic(){

        var imagenes = document.getElementsByTagName("img");
        for(var i=imagenes.length-1 ; i>=0 ; i--){
            imagenes[i].remove();
        }
    }

}
