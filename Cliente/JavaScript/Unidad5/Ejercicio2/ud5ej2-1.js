/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e2-1
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){


    var botones=document.getElementsByTagName("button");

    for(var i=0 ; i<botones.length ; i++){
        botones[i].addEventListener("click",clicButton);
    }

    function clicButton(){
        if(this.innerHTML=="rojo"){
            document.body.style.backgroundColor = "red";
        }if(this.innerHTML=="verde"){
            document.body.style.backgroundColor = "green";
        }if(this.innerHTML=="azul"){
            document.body.style.backgroundColor = "blue";
        }if(this.innerHTML=="negro"){
            document.body.style.backgroundColor = "black";
        }if(this.innerHTML=="blanco"){
            document.body.style.backgroundColor = "white";
        }
    }
}
