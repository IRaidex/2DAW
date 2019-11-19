/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5e2-2
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){


    var botones=document.getElementsByTagName("button");

    for(var i=0 ; i<botones.length ; i++){
        botones[i].addEventListener("click",clicButton);
    }

    function clicButton(){
        alert("hola");
        if(this.innerHTML=="Rick"){
            document.getElementById('foto').setAttribute("src",'rick.png');
        }if(this.innerHTML=="Morty"){
            document.getElementById('foto').setAttribute("src",'morty.png');
        }if(this.innerHTML=="Jerry"){
            document.getElementById('foto').setAttribute("src",'jerry.png');
        }if(this.innerHTML=="Beth"){
            document.getElementById('foto').setAttribute("src",'beth.png');
        }if(this.innerHTML=="Summer"){
            document.getElementById('foto').setAttribute("src",'summer.png');
        }
    }
}
