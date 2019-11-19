/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud8ej1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){


    var input = document.getElementById("nombre");
    input.addEventListener("blur",comprobar);

    var boton = document.getElementById("boton");
    boton.addEventListener("click",eliminarCookie);

    if (sessionStorage.getItem("veces") != "") {
        var veces = parseInt(sessionStorage.getItem("veces"));
        veces += 1;
        sessionStorage.setItem("veces",veces);
        if(sessionStorage.getItem("usuario") != ""){
            document.getElementById("info").innerHTML = sessionStorage.getItem("usuario")+", has visitado la pagina "+ veces +" veces";
        }else{
            document.getElementById("info").innerHTML = "Has visitado la pagina "+ veces+" veces";
        }

    }else {
        sessionStorage.setItem("veces",1);
        document.getElementById("info").innerHTML = "Has visitado la pagina 1 vez"
    }

    function comprobar(){
       sessionStorage.setItem("usuario",this.value);

    }


    function eliminarCookie(){
      sessionStorage.clear();
    }


}



