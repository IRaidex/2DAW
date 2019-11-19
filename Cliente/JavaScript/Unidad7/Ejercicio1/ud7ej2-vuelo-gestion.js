/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud7ej2-vuelo-gestion.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){


    var vuelo1 = new Vuelo(001,"19:00","13:00",false);
    var vuelo2 = new Vuelo(002,"18:00","10:00",false);
    var vuelo3 = new Vuelo(003,"21:00","15:00",false);
    var vuelo4 = new Vuelo(004,"12:00","09:00",true);
    var vuelo5 = new Vuelo(005,"11:00","08:00",true);

    var areopuerto = [vuelo1,vuelo2,vuelo3,vuelo4,vuelo5];

    var date = new Date();
    var horas = date.getHours();
    var minutos = date.getMinutes();

    for(var i = 0 ; areopuerto.length ; i++){

        var vueloHoras = areopuerto[i].horaLlegada.substring(0,2);
        var vueloMinutos = areopuerto[i].horaLlegada.substring(3,5);
        var divNom = "div"+i;
        
        var div = document.createElement("div");
        div.setAttribute("id",divNom);
        div.style.border= "1px solid red";
        if(vueloHoras>horas){
            div.innerHTML = areopuerto[i].toString()+" Va con retraso.";
        }else if(vueloHoras == horas){
            if(vueloMinutos<minutos){
                div.innerHTML = areopuerto[i].toString()+" Va con retraso.";
            }
        }else{
             div.innerHTML = areopuerto[i].toString()+" Llego a tiempo.";
        }

        document.body.appendChild(div);
    }

}
