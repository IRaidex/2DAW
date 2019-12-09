/*
autor: Alex Salcedo Santamaria                    

ejercicio:  actividad4-1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var user = document.getElementById("user").addEventListener("blur",peticion);
    var email = document.getElementById("email").addEventListener("blur",peticion);
}


//Funcion para crear el httpRequest
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


//Funcion para hacer la peticion AJAX
function peticion(){

    var httpRequest = obtainXMLHttpRequest();

    httpRequest.open("POST","http://localhost/2DAW/Cliente/JavaScript/Unidad9/Alex4/Alex4-2/comprobar.php", true);
    httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

    httpRequest.onreadystatechange= function() {
        if (httpRequest.readyState==2) {
            /*document.getElementById("personajes").innerHTML = '<img src="img/cargando.gif">';*/

        }

        if (httpRequest.readyState==4) {// Si se ha completado
            /* document.getElementById("personajes").innerHTML = "";*/

            // Se comprueba el estado de la petición
            if (httpRequest.status==200){//  el código 200 indica que la petición se ha respondido correctamente

                var objeto = httpRequest.responseText;
                objeto = JSON.parse(objeto);
                if(objeto.existe == 0){
                    
                    
                    
                }

            }
        }
    }

    httpRequest.send("tabla="+this.id+"&dato="+this.value);


}



