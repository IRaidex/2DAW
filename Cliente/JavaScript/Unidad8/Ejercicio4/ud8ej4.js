/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud8ej1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var boton = document.getElementById("boton");
    boton.addEventListener("click",crearCookie);
    var radio = document.getElementsByName("sexo");

    function crearCookie(evento){
        evento.preventDefault();
        var input = document.getElementsByTagName("input");
        for(var i=0 ; i<input.length ; i++){
            if(input[i].type == "text" || input[i].type == "date"){
                if(input[i].value.length>0){
                    setCookie(input[i].name,input[i].value,5);
                }
            }else if(input[i].type == "radio"){
                var radio = document.getElementsByName("sexo");
                if(comprobarRadio(radio)!=""){
                    setCookie(input[i].name,comprobarRadio(radio),5);
                }
            }else if(input[i].type == "checkbox"){
                var habilidades = document.getElementsByName("habilidades");
                var idiomas = document.getElementsByName("idioma");
                if(input[i].name == "habilidades"){
                    for(var i = 0 ; i<habilidades.length ; i++){
                        if(comprobarCheck(habilidades)==true){
                            setCookie(habilidades[i].value,true,5);
                        }else{
                            setCookie(habilidades[i].value,false,5);
                        }
                    }
                }else if(input[i].name == "idioma"){
                    for(var i = 0 ; i<idiomas.length ; i++){
                        if(comprobarCheck(habilidades)==true){
                            setCookie(habilidades[i].value,true,5);
                        }else{
                            setCookie(habilidades[i].value,false,5);
                        }
                    }
                }
            }
        }


    }


    function comprobarRadio(inputs){

        var seleccionado="";

        for(var i=0 ; i<inputs.length ; i++){
            if(inputs[i].checked==true){
                seleccionado = inputs[i].value;
                break;
            }
        }

        return seleccionado;

    }

}
