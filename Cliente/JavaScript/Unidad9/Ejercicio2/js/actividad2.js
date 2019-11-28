/*
autor: Alex Salcedo Santamaria                    

ejercicio:  actividad2.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var links = document.getElementsByClassName("nav-link");
    console.log(links);

    for(var i=0 ; i<links.length ; i++){
        links[i].addEventListener("click",clicNav);
    }

    function clicNav(){


        var httpRequest = obtainXMLHttpRequest();

        httpRequest.open("GET", this.id+".html", true);
        httpRequest.onreadystatechange= function() {
            if (httpRequest.readyState==2) {
                document.getElementById("contenido").innerHTML = 'CARGANDO....<img sr="img/cargando.gif">';

            }

            if (httpRequest.readyState==4) {// Si se ha completado

               
                // Se comprueba el estado de la petición
                if (httpRequest.status==200){//  el código 200 indica que la petición se ha respondido correctamente

                    
                    document.getElementById("contenido").innerHTML = httpRequest.responseText;
                }
            }
        }

        httpRequest.send();

    }



    function obtainXMLHttpRequest(){
        var httpRequest;
        if (window.XMLHttpRequest)//El explorador implementa la interfaz de forma nativa
            httpRequest= new XMLHttpRequest();
        else if (window.ActiveXObject) {//El explorador permite crear objetos ActiveX
            try {
                httpRequest= new ActiveXObject("MSXML2.XMLHTTP");
            } catch (e) {
                try {
                    httpRequest= new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}}}if (!httpRequest)// Si no se puede crear, devolvemos false. En caso contrario, devolvemos el objeto
                    return false;
        else
            return httpRequest;
    }

}



