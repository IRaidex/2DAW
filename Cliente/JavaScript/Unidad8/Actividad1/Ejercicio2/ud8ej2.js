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
    setCookie("fecha",fecha,365);

    if (getCookie("veces") != "") {
        var veces = parseInt(getCookie("veces"));
        veces += 1;
        setCookie("veces",veces,365);
        if(getCookie("usuario") != ""){
            document.getElementById("info").innerHTML = getCookie("usuario")+", has visitado la pagina "+ veces +" veces y la ultima visita fue  ---> "+ getCookie("fecha");
        }else{
            document.getElementById("info").innerHTML = "Has visitado la pagina "+ veces+" veces y la ultima visita fue  ---> "+ getCookie("fecha");
        }

    }else {
        setCookie("veces",1,365);
        document.getElementById("info").innerHTML = "Has visitado la pagina 1 vez"
    }

    function comprobar(){
        setCookie("usuario",this.value,365);

    }


    function eliminarCookie(){
        deleteCookie("usuario");
        deleteCookie("veces");
    }


}



