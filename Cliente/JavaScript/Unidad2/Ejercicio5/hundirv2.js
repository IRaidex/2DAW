document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var tablero=cargaTablero();
    mostrarTablero(tablero);

    var celdas = document.getElementsByClassName("colortable");

    for(var i=0 ; i<celdas.length ; i++){
        celdas[i].addEventListener("click",disparo);
    }

    function disparo(){
        var fila=parseInt(this.id[1]);
        var columna=parseInt(this.id[3]);



        if(comprobar(tablero,fila,columna)==0){
            this.setAttribute("class","agua");
        }else if(comprobar(tablero,fila,columna)==1){
            this.setAttribute("class","barco");
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
                        alert("Has hundido una fragata");
                    }else if(longitud==3){
                        alert("Has hundido un submarino");
                    }else if(longitud==4){
                        alert("Has hundido un destructor");
                    }else if(longitud==5){
                        alert("Has hundido un portaaviones");
                    }
                }

            }else if(barcoVertical(tablero,fila,columna)== true){
                while(fila>0 && tablero[fila-1][columna]!=0){
                    fila--;
                }
                var tocado=0;
                var longitud=0;

                while(tablero[fila][columna]!=0 && fila<10){
                    if(tablero[fila][columna]==-1){
                        tocado++;

                    }
                    longitud++;
                    fila++;
                }
                if(longitud==tocado){
                    if(longitud==2){
                        alert("Has hundido una fragata");
                    }else if(longitud==3){
                        alert("Has hundido un submarino");
                    }else if(longitud==4){
                        alert("Has hundido un destructor");
                    }else if(longitud==5){
                        alert("Has hundido un portaaviones");
                    }
                }
            }
        }
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

}