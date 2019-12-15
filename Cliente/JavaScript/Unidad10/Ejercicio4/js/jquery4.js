$(function() {
    var boton = document.getElementById("comentar").addEventListener("click",comentar);
    $('article').mouseover(function(){
        $(this).attr('class','mouse');
    });
    $('article').mouseout(function(){
        $(this).removeAttr('class');
    });

    $( "body" ).on( "click", "div", function() {
        $(this).css('background-color','dodgerblue');
    });
});


function comentar(evento){
    evento.preventDefault();


    var nombre = document.getElementById("nombre");
    var mail = document.getElementById("mail");
    var coment = document.getElementById("comentario");

    console.log(nombre.value);
    console.log(mail.value);
    console.log(coment.value);

    if(nombre.value.length==0 || mail.value.length==0 || coment.value.length==0){
        alert("Los campos no pueden estar vacios");
    }else{
        nombre.value.trim();
        mail.value.trim();
        coment.innerHTML.trim();
    }

    peticion(nombre,mail,coment);


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
function peticion(nombre,mail,coment){

    var httpRequest = obtainXMLHttpRequest();

    httpRequest.open("POST","http://localhost/2DAW/Cliente/JavaScript/Unidad9/Alex4/Alex4-1/insertar.php", true);
    httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

    httpRequest.onreadystatechange= function() {
        if (httpRequest.readyState==2) {
            /*document.getElementById("personajes").innerHTML = '<img src="img/cargando.gif">';*/

        }

        if (httpRequest.readyState==4) {// Si se ha completado
            /* document.getElementById("personajes").innerHTML = "";*/

            // Se comprueba el estado de la petición
            if (httpRequest.status==200){//  el código 200 indica que la petición se ha respondido correctamente

                var article = document.getElementById("comentarios")

                var div1 = document.createElement("div");
                div1.setAttribute("class","comentario");
                article.appendChild(div1);

                var div2 = document.createElement("div");
                div2.setAttribute("class","datos");
                div1.appendChild(div2);

                var span1 = document.createElement("span");
                span1.setAttribute("class","autor");
                div2.appendChild(span1);

                var mailto = document.createElement("a");
                mailto.setAttribute("href",'mailto:'+mail.value);
                mailto.innerHTML = nombre.value;
                span1.appendChild(mailto);

                var span2 = document.createElement("span");
                span2.setAttribute("class","fecha");
                var fecha = new Date();

                span2.innerHTML = fecha.getHours()+":"+fecha.getMinutes()+" - "+fecha.getDay()+" "+sacarMes(fecha.getMonth())+" "+fecha.getFullYear();

                div2.appendChild(span2);
                var div3 = document.createElement("div");
                div3.setAttribute("class","texto");
                div3.innerHTML = coment.value;
                div1.appendChild(div3);

                console.log(httpRequest.responseText);

            }
        }
    }

    httpRequest.send("nombre="+nombre.value+"&mail="+mail.value+"&comentario="+coment.value);


}

function sacarMes(num){

    var meses= ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

    return meses[num];

}

/*function meterComentario(array){

    console.log(array);
    for(var i=0 ; i<array.length ; i++){

        var div = document.getElementById("personajes");
        div.innerHTML += '<div class="col-3"><div class="card bg-light my-2 mx-1 border border-dark"><img src="'+array[i].img+'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+array[i].name+'</h5><p class"card-text">Apodo: '+array[i].nickname+'<br>Fecha Nacimiento: '+array[i].birthday+'</p><p class="card-text"><small class="text-muted">Interpretado por: '+array[i].portrayed+'</small></p></div></div></div>';

    }    
}*/
