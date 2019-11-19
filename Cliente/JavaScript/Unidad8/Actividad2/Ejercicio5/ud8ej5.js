/*
autor: Alex Salcedo                     

ejercicio: ud8ej5.js
*/
document.addEventListener("DOMContentLoaded", cargar);

function cargar(){
    document.getElementById('enviar').addEventListener('click', comprobar);


    function comprobar(evento){
        evento.preventDefault();
        var objeto = {};
        var input = document.getElementsByTagName('input');
        for(var i = 0 ; i<input.length ; i++){
            if((input[i].type == 'text') || (input[i].type == 'date')){
                if(input[i].value != ""){
                    objeto[input[i].name]=input[i].value;
                }
            }else if (input[i].type == 'radio'){
                var radios = document.getElementsByName('sexo');
                if(comprobarChecks(radios) != ""){
                    objeto[input[i].name]=comprobarChecks(radios);
                }
            }else if (input[i].type == 'checkbox'){
                var habilidades = document.getElementsByName('habilidades');
                for (var j = 0 ; j<habilidades.length ; j++){
                    objeto[habilidades[j].value]=agregarCheck(habilidades[j]);
                }
                var idiomas = document.getElementsByName('idioma');
                for (var j = 0 ; j<idiomas.length ; j++){
                    objeto[idiomas[j].value]=agregarCheck(idiomas[j]);
                }
            }
        }
        var elemento = document.getElementById('nacionalidad');
        var seleccionado = elemento.selectedIndex
        if(comprobarSelect(elemento.options[seleccionado].value) == true){
            objeto[document.getElementById('nacionalidad').name]=elemento.options[seleccionado].text
        }
        if(document.getElementById('comentario').innerHTML != ""){
            objeto[document.getElementById('comentario').name]=document.getElementById('comentario').innerHTML;
        }
        objeto = JSON.stringify(objeto);
        sessionStorage.setItem('objetoJSON', objeto);
    }
}

function comprobarChecks(checks){
    var seleccionado="";
    for (var i = 0 ; i<checks.length ; i++){
        if(checks[i].checked == true){
            estaSel = checks[i].value;
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

function agregarCheck(check){
    if(check.checked == true){
        return true
    }else{
        return false;
    }
}

