/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud4e4-3
*/

var caracteres = "abcdefghijkmnpqrtuvwxyz";



var letraDiana = caracteres[Math.floor(Math.random() * 27)];
document.write("Introduce una letra, Suerte!");

console.log(letraDiana);

document.addEventListener("keyup", key);

function key(evento) {
    letra=evento.keyCode;
    letra=String.fromCharCode(letra);
    letra=letra.toLowerCase();
    if(letra==letraDiana){
        alert("Acertaste!!")
        document.removeEventListener("keyup", key);
    }else{
        alert("Sigue intentando")
    }
}