document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    document.write('<table border= 1px>');
    for(var i = 0 ; i<10 ; i++){
        document.write('<tr>');
        for(var j=0 ; j<10 ; j++){
            document.write('<td id="c'+i+j+'">X</td>');
            document.getElementById("c"+i+j).onclick=cliCelda;
        }
        document.write('</tr>');
    }
    document.write('</table>');

    function cliCelda(){
        var identificador = this.id;

        var fila= parseInt(identificador[1])+1;
        var celda= parseInt(identificador[2])+1;

        alert("Fila:"+fila+" Celda:"+celda);
    }

}