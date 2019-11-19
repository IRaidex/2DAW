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

    var fecha = new Date();
    var mes = fecha.getMonth()+1;

    fecha = fecha.getHours()+ ":"+fecha.getMinutes()+":"+fecha.getSeconds()+" - "+fecha.getDate()+"/"+mes+"/"+fecha.getFullYear();
    sessionStorage.setItem("fecha",fecha);

    if (sessionStorage.getItem("veces") != "") {
        var veces = parseInt(sessionStorage.getItem("veces"));
        veces += 1;
        sessionStorage.getItem("veces",veces);
        if(sessionStorage.getItem("usuario") != ""){
            document.getElementById("info").innerHTML = sessionStorage.getItem("usuario")+", has visitado la pagina "+ veces +" veces y la ultima visita fue  ---> "+ sessionStorage.getItem("fecha");
        }else{
            document.getElementById("info").innerHTML = "Has visitado la pagina "+ veces+" veces y la ultima visita fue  ---> "+ sessionStorage.getItem("fecha");
        }

    }else {
        sessionStorage.getItem("veces",1);
        document.getElementById("info").innerHTML = "Has visitado la pagina 1 vez"
    }

    function comprobar(){
        sessionStorage.getItem("usuario",this.value);

    }


    function eliminarCookie(){
        sessionStorage.clear();
    }


}



