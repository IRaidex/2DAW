/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud8ej3.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var dark = document.getElementById("dark");
    var light = document.getElementById("light");

    dark.addEventListener("click",ponerDark);
    light.addEventListener("click",ponerLight);

    var link = document.createElement("link");
    link.setAttribute("rel","stylesheet");
    link.setAttribute("type","text/css");
    link.setAttribute("id","link");
    document.head.appendChild(link);
    if(getCookie("css") != ""){
        link.setAttribute("href",getCookie("css"));
    }

    function ponerLight(){
        document.getElementById("link").setAttribute("href","light.css");
        setCookie("css","light.css",1);

    }

    function ponerDark(){
        document.getElementById("link").setAttribute("href","dark.css");
        setCookie("css","dark.css",1);
    }
}
