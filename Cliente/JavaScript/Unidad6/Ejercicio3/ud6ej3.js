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

    var boton = document.getElementById("registro");
    boton.addEventListener("click",registrar);


    for(var i=0 ; i<inputs.length ; i++){
        inputs[i].addEventListener("blur",perderFoco);
    }

    function perderFoco(){
        console.log(this.id);
        var divId = "error"+this.name;
        if(document.getElementById(divId)!=null){
            document.getElementById(divId).remove();
        }
        //alert(this.type);
        if(this.type == "text" || this.type == "date"){
            if(comprobarText(this.value)==true){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    this.insertAdjacentElement("afterend",div);
                }
            }else if(this.id == "nombre" || this.id == "apellido1" || this.id == "apellido2"){
                var expNomb = new RegExp("^[A-Z]{1}[a-z \s]{1,13}[a-z]{1}$");
                if(expNomb.test(this.value)==false){
                    if(document.getElementById(divId)==null){
                        var div = document.createElement("div");
                        div.setAttribute("id",divId);
                        div.setAttribute("class","error");
                        div.style.backgroundColor = "#f25757";
                        div.style.border= "1px solid red";
                        div.innerHTML = "El campo "+this.name+" tiene que empezar con mayuscula y seguir en minuscula (3-15)";
                        this.insertAdjacentElement("afterend",div);
                    }
                }
            }else if(this.id == "usuario"){
                var expUsu = new RegExp('^[a-z]{1}[a-z0-9]+$', 'i');
                if(expUsu.test(this.value)==false){
                    if(document.getElementById(divId)==null){
                        var div = document.createElement("div");
                        div.setAttribute("id",divId);
                        div.setAttribute("class","error");
                        div.style.backgroundColor = "#f25757";
                        div.style.border= "1px solid red";
                        div.innerHTML = "El campo "+this.name+" solo puede tener letras y números, pero debe empezar por letra.";
                        this.insertAdjacentElement("afterend",div);
                    }
                }
            }else if(this.id == "email1"){
                var expEmail = new RegExp("^[a-z_.]+@[a-z]+.[a-z]{2,3}$","i");
                if(expEmail.test(this.value)==false){
                    if(document.getElementById(divId)==null){
                        var div = document.createElement("div");
                        div.setAttribute("id",divId);
                        div.setAttribute("class","error");
                        div.style.backgroundColor = "#f25757";
                        div.style.border= "1px solid red";
                        div.innerHTML = "El campo "+this.name+" debe seguir el patrón de las direcciones de correo electrónico.";
                        this.insertAdjacentElement("afterend",div);
                    }
                }
            }else if(document.getElementById("email2").value != document.getElementById("email1").value){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" tiene que ser identico al email1.";
                    this.insertAdjacentElement("afterend",div);
                }
            }else if(this.id == "contrasenya"){
                var expPass = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@$!%*?&])[A-Za-z0-9$@$!%*?&]{8,15}");
                if(expPass.test(this.value)==false){
                    if(document.getElementById(divId)==null){
                        var div = document.createElement("div");
                        div.setAttribute("id",divId);
                        div.setAttribute("class","error");
                        div.style.backgroundColor = "#f25757";
                        div.style.border= "1px solid red";
                        div.innerHTML = "El campo "+this.name+" debe tener al menos 8 caracteres, teniendo al menos una minúscula, una mayúscula, un símbolo y un número.";
                        this.insertAdjacentElement("afterend",div);
                    }
                }
            }else if(document.getElementById("contrasenya").value != document.getElementById("contrasenya2").value){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" tiene que ser identico a la contraseña anterior.";
                    this.insertAdjacentElement("afterend",div);
                }
            }
        }else if(this.type == "radio"){
            var radios = document.getElementsByName("sexo");
            if(comprobarRadio(radios)==false){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    document.getElementById("hombre").insertAdjacentElement("afterend",div);
                }

            }
        }else if(this.type == "checkbox"){
            var checks = document.getElementsByName(this.name);

            if(comprobarRadio(checks)==false){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    if(this.name == "habilidades"){
                        document.getElementById("HTML").insertAdjacentElement("beforebegin",div);
                    }else{
                        document.getElementById("espanyol").insertAdjacentElement("beforebegin",div);
                    }

                }
            }

        }else if(this.id=="nacionalidad"){
            if(this.selectedIndex==0){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "En el campo "+this.name+" tiene que seleccionar una opcion.";
                    this.insertAdjacentElement("afterend",div);
                }
            }
        }else if(this.type == "textarea"){
            if(comprobarText(this.value)==true){
                if(document.getElementById(divId)==null){
                    var div = document.createElement("div");
                    div.setAttribute("id",divId);
                    div.setAttribute("class","error");
                    div.style.backgroundColor = "#f25757";
                    div.style.border= "1px solid red";
                    div.innerHTML = "El campo "+this.name+" no puede estar vacio";
                    this.insertAdjacentElement("afterend",div);
                }
            }
        }

    }

    function registrar(){

        var inputs = document.getElementsByTagName("input");
        var selector = document.getElementById("nacionalidad");
        var textarea = document.getElementById("comentario");

        for(var i=0 ; i<inputs.length ; i++){
            inputs[i].focus();
            inputs[i].blur();
        }
        selector.focus();
        selector.blur();
        textarea.focus();
        textarea.blur();
        
        var error = document.getElementsByClassName("error");
        
        if(error.length==0){
            var formulario = document.getElementById("formulario");
            formulario.submit();
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
