/*
autor: Alex Salcedo Santamaria                    

ejercicio:  actividad3-1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var httpRequest = obtainXMLHttpRequest();

    var pags = document.getElementsByClassName("page-link");
    for(var i=0 ; i<pags.length ; i++){
        pags[i].addEventListener("click",eventoPagina);
    }

    peticion(10,0);

}

function eventoPagina(){
   
    if(this.innerHTML==6){
        peticion(7,(this.innerHTML-1)*10);
    }else{
        peticion(10,(this.innerHTML-1)*10);
    }
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
            document.getElementById("personajes").innerHTML = '<img src="img/cargando.gif">';

        }

        if (httpRequest.readyState==4) {// Si se ha completado
            document.getElementById("personajes").innerHTML = "";

            // Se comprueba el estado de la petición
            if (httpRequest.status==200){//  el código 200 indica que la petición se ha respondido correctamente

                var objeto = JSON.parse(httpRequest.responseText);
                meterPjs(objeto);



            }
        }
    }

    httpRequest.send();


}

function meterPjs(array){

    console.log(array);
    for(var i=0 ; i<array.length ; i++){

        var div = document.getElementById("personajes");
        div.innerHTML += '<div class="col-3"><div class="card bg-light my-2 mx-1 border border-dark"><img src="'+array[i].img+'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+array[i].name+'</h5><p class"card-text">Apodo: '+array[i].nickname+'<br>Fecha Nacimiento: '+array[i].birthday+'</p><p class="card-text"><small class="text-muted">Interpretado por: '+array[i].portrayed+'</small></p></div></div></div>';

    }    
}
