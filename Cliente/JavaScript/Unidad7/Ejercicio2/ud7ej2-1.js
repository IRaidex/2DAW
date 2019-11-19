/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej2-1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var boton = document.getElementsByClassName("boton");
    boton[0].addEventListener("click",sacarDatos);

    function sacarDatos(){
        var nombre = document.getElementById("nombre").value;
        var email = document.getElementById("mail").value;
        var comentario = document.getElementById("comentario").value;
        var coment = { nombre:nombre , email:email, comentario:comentario };
        crearComentario(coment);
    }

}
function crearComentario(coment){
    
    var section = document.getElementsByTagName("section");
    
    var article = document.createElement("article");
    article.setAttribute("class","comentario");
    section[0].appendChild(article);
    var div = document.createElement("div");
    div.setAttribute("class","datos");
    article.appendChild(div);
    var span1 = document.createElement("span");
    span1.setAttribute("class","autor");
    div.appendChild(span1);
    var mailto = document.createElement("a");
    mailto.setAttribute("href",'mailto:'+coment.email);
    mailto.innerHTML = coment.nombre;
    span1.appendChild(mailto);
    var span2 = document.createElement("span");
    span2.setAttribute("class","fecha");
    var fecha = new Date();
    
    span2.innerHTML = fecha.getHours()+":"+fecha.getMinutes()+" - "+fecha.getDay()+" "+sacarMes(fecha.getMonth())+" "+fecha.getFullYear();
    
    div.appendChild(span2);
    var div2 = document.createElement("div");
    div2.setAttribute("class","texto");
    div2.innerHTML = coment.comentario;
    article.appendChild(div2);

    var form = document.getElementById("formulario");
    form.reset();

    


}

function sacarMes(num){
    
    var meses= ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    
    return meses[num];
    
}

