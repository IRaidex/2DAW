/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej5-1
*/

var tablero=cargaTablero();
mostrarTablero(tablero);

for(var i=0 ; i<=20 ; i++){
    fila=prompt("Introduce la fila donde quieres disparar (A-J)");
    columna=prompt("Introduce la columna donde quieres disparar (1-10)");
    columna=parseInt(columna);
    filaLetra=fila;
    columNum=columna;
    fila=sacarFila(fila);
    fila=parseInt(fila);
    columna--;

    if(comprobar(tablero,fila,columna)==0){
        document.write("En la casilla "+filaLetra+columNum+" AGUA<br>");
    }else if(comprobar(tablero,fila,columna)==1){
        document.write("En la casilla "+filaLetra+columNum+" TOCADO<br>");
        tablero[fila][columna]= -1;
        if(barcoVertical(tablero,fila,columna)== false){
            while(columna>0 && tablero[fila][columna-1]!=0){
                columna--;
            }
            var tocado=0;
            var longitud=0;

            while(tablero[fila][columna]!=0 && columna<10){
                if(tablero[fila][columna]==-1){
                    tocado++;
                    console.log("tocado"+tocado);
                }
                longitud++;
                console.log("Longitud"+longitud);
                columna++;
            }
            console.log("columna"+columna);
            if(longitud==tocado){
                if(longitud==2){
                    document.write("Has hundido una fragata <br>");
                }else if(longitud==3){
                    document.write("Has hundido un submarino <br>");
                }else if(longitud==4){
                    document.write("Has hundido un destructor <br>");
                }else if(longitud==5){
                    document.write("Has hundido un portaaviones <br>");
                }
            }

        }else if(barcoVertical(tablero,fila,columna)== true){
            while(fila>0 && tablero[fila-1][columna]!=0){
                fila--;
            }
            var tocado=0;
            var longitud=0;

            while(tablero[fila][columna]!=0 && fila<=9){
                if(tablero[fila][columna]==-1){
                    tocado++;
                    
                }
                longitud++;
                fila++;
            }
            if(longitud==tocado){
                if(longitud==2){
                    document.write("Has hundido una fragata <br>");
                }else if(longitud==3){
                    document.write("Has hundido un submarino <br>");
                }else if(longitud==4){
                    document.write("Has hundido un destructor <br>");
                }else if(longitud==5){
                    document.write("Has hundido un portaaviones <br>");
                }
            }
        }

    }else{
        document.write("Ea la casilla "+filaLetra+columNum+" YA DISPARASTE<br>");
    }
}

function sacarFila(fila){

    switch(fila){
        case "A": fila=0; break;
        case "B": fila=1; break;
        case "C": fila=2; break;
        case "D": fila=3; break;
        case "E": fila=4; break;
        case "F": fila=5; break;
        case "G": fila=6; break;
        case "H": fila=7; break;
        case "I": fila=8; break;
        case "J": fila=9; break;
    }

    return fila;

}

function comprobar(tablero,fila,columna){
    if(tablero[fila][columna] == 0){
        return 0;
    }else if(tablero[fila][columna] == 1){
        return 1;
    }else{
        return -1;
    }
}

function barcoVertical(tablero,fila,columna){
    var esVer=false;
    if(fila == 0 && tablero[fila][columna+1] == 0){
        esVer=true;
    }else if(fila == 9 && tablero[fila][columna-1] == 0){
        esVer=true;
    }else if(tablero[fila][columna-1] == 0 && tablero[fila][columna+1] == 0){
        esVer=true;
    }
    return esVer;
}


var fila;
var filaLetra;
var columna;
var columNum;
