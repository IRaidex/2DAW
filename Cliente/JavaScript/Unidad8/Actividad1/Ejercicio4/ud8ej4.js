/*
autor: Alex Salcedo                

ejercicio: ud8ej4.js
*/

document.addEventListener("DOMContentLoaded", cargar);

function cargar(){

    document.getElementById('enviar').addEventListener('click', comprobar);

    function comprobar(evento){
        evento.preventDefault();
        var input = document.getElementsByTagName('input');
        for (var i = 0 ; i<input.length ; i++){
            if((input[i].type == 'text') || (input[i].type == 'date')){
                if(input[i].value != ""){
                    setCookie(input[i].name, input[i].value, 5);
                }
            }else if(input[i].type == 'radio'){
                var radios = document.getElementsByName('sexo');
                if(comprobarChecks(radios) != ""){
                    setCookie(input[i].name, comprobarChecks(checks),5)
                }
            }else if (input[i].type == 'checkbox'){
                var habilidades = document.getElementsByName('habilidades');
                agregarCheckBox(habilidades);
                var idiomas = document.getElementsByName('idioma');
                agregarCheckBox(idiomas);
            }

            if(document.getElementById('comentario').innerHTML != ""){
                setCookie(document.getElementById('comentario').name, document.getElementById('comentario').value, 5);
            }

            var elemento = document.getElementById('nacionalidad');
            var seleccionado = elemento.selectedIndex;
            if(comprobarSelect(elemento.options[seleccionado].value) == true){
                setCookie('nacionalidad', elemento.options[seleccionado].text, 5);
            }
        }

    }

}

function comprobarChecks(checks){
    var seleccionado="";
    for (var i = 0 ; i<checks.length ; i++){
        if(checks[i].checked == true){
            seleccionado = checks[i].value;
            break;
        }
    }
    return seleccionado;


}

function comprobarSelect(select){
    if (select != -1){
        return true;
    }else{
        return false;
    }
}

function agregarCheckBox(checks){
    for (var i = 0 ; i<checks.length ; i++){
        if(checks[i].checked == true){
            setCookie(checks[i].value , true , 5);
        }else{
            setCookie(checks[i].value , false , 5);
        }
    }

}


