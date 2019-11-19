document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var p=document.getElementsByTagName("p");

    for(var i=0 ; i<p.length ; i++){
        p[i].addEventListener("mouseover",myfun);
        p[i].addEventListener("mouseout",myfun);

    }

    function myfun(evento){
        if(evento.type=="mouseout"){
        this.setAttribute("class","");
        }else if(evento.type=="mouseover"){
            this.setAttribute("class","marcado");
        }
    }


}