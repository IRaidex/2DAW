document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var inputs = document.getElementsByTagName("input");
    var select = document.getElementsByTagName("select");
    var textarea = document.getElementsByTagName("textarea");

    select[0].addEventListener("blur",perderFoco);
    textarea[0].addEventListener("blur",perderFoco);

    for(var i=0 ; i<inputs.length ; i++){
        inputs[i].addEventListener("blur",perderFoco);
    }

    function perderFoco(){
        //alert(this.type);
        if(this.type == "text" || this.type == "date"){
            if(comprobarText(this.value)==true){
                alert("El "+this.name+" no puede estar vacio.");
            }
        }else if(this.type == "radio" || this.type == "checkbox"){
            var radios = document.getElementsByName("sexo");
            if(comprobarRadio(radios)==true){
                alert("El "+this.name+" no puede estar vacio.");
            }
        }else if(this.type == "select"){
            comprobarSel(select[0]);
        }else if(this.type == "textarea"){
            if(comprobarText(this.value)==true){
                alert("El "+this.name+" no puede estar vacio.");
            }
        }

    }

    function comprobarText(inputs){

        var vacio=false;
        if(inputs==""){
            vacio=true;
        }
        return vacio;
    }

    function comprobarRadio(inputs){

        var seleccionado=false;

        for(var i=0 ; i<inputs.length ; i++){
            if(inputs[i].checked==false){
                seleccionado=true;
            }
        }

        return seleccionado;

    }

    function comprobarSel(input){
        if(input.value == -1){
            alert("En Nacionalidad tienes que seleccionar una opción");
        }
    }
}
