document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var nombre = document.getElementById("nombre");
    var mail = document.getElementById("mail");
    var coment = document.getElementById("comentario");



    var botones = document.getElementsByClassName("boton");
    botones[0].addEventListener("click", comentar);


    function comentar(){
        if(this.type == "button"){

            var div = document.createElement("div");
            var destino = document.getElementsByTagName("section");
            div.setAttribute("class","comentario");
            destino[0].appendChild(div);


            var datos = document.createElement("div");
            datos.setAttribute("class","datos");
            var destino2 = document.getElementsByClassName("comentario");
            destino2[2].appendChild(datos);

            var autor = document.createElement("span");
            autor.setAttribute("class","autor");
            autor.innerHTML = '<a href="mailto:'+mail.value+'">'+nombre.value;
            var destino3 = document.getElementsByClassName("datos");
            destino3[2].appendChild(autor);

            var fecha = document.createElement("span");
            fecha.setAttribute("class","fecha");
            fecha.innerHTML = "19:30 - 26 octubre 2019"
            destino3[2].appendChild(fecha);
            
            var comentario = document.createElement("div");
            comentario.setAttribute("class","texto");
            comentario.innerHTML = coment.value;
            destino2[2].appendChild(comentario);
            
            var formulario = document.getElementById("formulario");
            formulario.reset();
            
        }
    }
}