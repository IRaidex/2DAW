/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud8ej7.js
*/


document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var nombre = document.getElementById("nombre");
    nombre.addEventListener("blur",comprobar);


    function comprobar(){

        if(this.value != ""){
            var cookie = sessionStorage.getItem("nombre");
            if(cookie != null){
                if(this.value == cookie){
                    var div = document.getElementById("info").innerHTML = this.value;
                }else{
                    var div = document.getElementById("info").innerHTML = "la variable ‘nombre’ no está en la cookie";            }
            }else{
                sessionStorage.setItem("nombre",this.value);
            }

        }



    }

}