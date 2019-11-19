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
                    sessionStorage.setItem(input[i].name, input[i].value);
                }
            }else if(input[i].type == 'radio'){
                var radios = document.getElementsByName('sexo');
                if(comprobarChecks(radios) != ""){
                    sessionStorage.setItem(input[i].name, comprobarChecks(checks))
                }
            }else if (input[i].type == 'checkbox'){
                var habilidades = document.getElementsByName('habilidades');
                agregarCheckBox(habilidades);
                var idiomas = document.getElementsByName('idioma');
                agregarCheckBox(idiomas);
            }

            if(document.getElementById('comentario').innerHTML != ""){
                sessionStorage.setItem(document.getElementById('comentario').name, document.getElementById('comentario').value);
            }

            var elemento = document.getElementById('nacionalidad');
            var seleccionado = elemento.selectedIndex;
            if(comprobarSelect(elemento.options[seleccionado].value) == true){
                sessionStorage.setItem('nacionalidad', elemento.options[seleccionado].text);
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
            sessionStorage.setItem(checks[i].value , true );
        }else{
            sessionStorage.setItem(checks[i].value , false);
        }
    }

}


