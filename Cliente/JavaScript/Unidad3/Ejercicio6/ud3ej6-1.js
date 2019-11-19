/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud3ej6-1
*/
setInterval(reloj,1000,today);

var today = new Date();
var hr = today.getHours();
var min = today.getMinutes();
var sec = today.getSeconds();
min = checkTime(min);
sec = checkTime(sec);

function reloj(today){
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();

    min = checkTime(min);
    sec = checkTime(sec);
    document.write(hr+":"+min+":"+sec+"<br>");
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

