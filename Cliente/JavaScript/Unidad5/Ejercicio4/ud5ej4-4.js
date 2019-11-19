/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e4-4
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var parrafos = document.getElementsByClassName("borrar")

    document.addEventListener("scroll",eliminar);

    function eliminar(){
        var alturaWeb=document.body.offsetHeight;
        var altura=window.scrollY;
        var alturaVisible=window.innerHeight;

        if(altura+alturaVisible>=alturaWeb){
            for(var i=0 ; i<parrafos.length;i++){
                parrafos[i].remove();
            }
        }
    }
}
