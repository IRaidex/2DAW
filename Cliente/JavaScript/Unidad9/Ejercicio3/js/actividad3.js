/*
autor: Alex Salcedo Santamaria                    

ejercicio:  actividad3.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var httpRequest = obtainXMLHttpRequest();
    
    var arrayPersonajes = peticion(10,0);
    
    var div = document.getElementById("personajes");
    div.innerHTML = '<div class="col-3"><div class="card bg-light my-2 mx-1 border border-dark"><img src="'+arrayPersonajes.img+'"><div class="card-body"><h5 class="card-title">'+arrayPersonajes.name+'</h5><p class"card-text">Apodo: '+arrayPersonajes.nickname+'<br>Fecha Nacimiento: '+arrayPersonajes.birthday+'</p><p class="card-text"><small class="text-muted">Interpretado por: '+arrayPersonajes.portrayed+'</small></p></div></div></div>';



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


//Funcion para hacer la peticion y le pasamos el limit y offset
function peticion(limite,offset){

    var httpRequest = obtainXMLHttpRequest();

    httpRequest.open("GET", 'https://breakingbadapi.com/api/characters?limit='+limite+'&offset='+offset, true);
    httpRequest.onreadystatechange= function() {
        if (httpRequest.readyState==2) {
            document.getElementById("personajes").innerHTML = 'CARGANDO....<img sr="img/cargando.gif">';

        }

        if (httpRequest.readyState==4) {// Si se ha completado


            // Se comprueba el estado de la petición
            if (httpRequest.status==200){//  el código 200 indica que la petición se ha respondido correctamente

                var objeto = JSON.parse(httpRequest.responseText);
                return objeto;


            }
        }
    }

    httpRequest.send();


}


