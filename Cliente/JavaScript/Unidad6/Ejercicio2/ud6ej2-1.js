/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud6ej2-1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var inputs = document.getElementsByTagName("input");
    var selector = document.getElementById("nacionalidad");
    var textarea = document.getElementsByTagName("textarea");

    selector.addEventListener("blur",perderFoco);
    textarea[0].addEventListener("blur",perderFoco);

    for(var i=0 ; i<inputs.length ; i++){
        inputs[i].addEventListener("blur",perderFoco);
    }

    function perderFoco(){
        console.log(this.id);
        var divId = "error"+this.name;

        //alert(this.type);
        if(this.type == "text" || this.type == "date"){
            if(comprobarText(this.value)==true){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    this.insertAdjacentElement("afterend",div);
                }
            }else{
                document.getElementById(divId).remove();
            }
        }else if(this.type == "radio"){
            var radios = document.getElementsByName("sexo");
            if(comprobarRadio(radios)==false){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    document.getElementById("hombre").insertAdjacentElement("afterend",div);
                }

            }else{
                document.getElementById(divId).remove();
            }
        }else if(this.type == "checkbox"){
            var checks = document.getElementsByName(this.name);

            if(comprobarRadio(checks)==false){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    if(this.name == "habilidades"){
                        document.getElementById("HTML").insertAdjacentElement("beforebegin",div);
                    }else{
                         document.getElementById("espanyol").insertAdjacentElement("beforebegin",div);
                    }

                }
            }else{
                document.getElementById(divId).remove();
            }

        }else if(this.id=="nacionalidad"){
            if(this.selectedIndex==0){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "En el campo "+this.name+" tiene que seleccionar una opcion.";
                    this.insertAdjacentElement("afterend",div);
                }
            }else{
                document.getElementById(divId).remove();
            }
        }else if(this.type == "textarea"){
            if(comprobarText(this.value)==true){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    this.insertAdjacentElement("afterend",div);
                }
            }else{
                document.getElementById(divId).remove();
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
            if(inputs[i].checked==true){
                seleccionado=true;
            }
        }

        return seleccionado;

    }

    function comprobarSel(seleccionado){
        var encontrado=false;

        if(elemento.options[seleccionado] == -1){
            encontrado=true;
        }
        return encontrado;
    }

}
