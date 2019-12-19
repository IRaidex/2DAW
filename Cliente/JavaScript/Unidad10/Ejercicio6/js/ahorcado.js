$(function() {
    //Añado los divs con todas las letras del abecedario
    $.ajax('letras.php',{
        success:function(data){
            data = JSON.parse(data);
            for(var i=0 ; i<data.length ; i++){
                var div = $('<div>').addClass('grid-letra');
                div.append(data[i]);
                $('#panelLetras').append(div);
            }
        }
    });

    //Muestro el input para que meta la palabra manualmente.
    $('#manual').click(function(){
        $('#partidaPersonalizada').css('display','block');
    })

    //Evito el submit , compruebo que la palabra tiene longitud mayo a 0 y llamo a la funcion empezarPartida
    $('#empezar').click(function(evento){
        evento.preventDefault();
        var palabra = $('#campopalabra').val().trim();
        if(palabra.length != 0){
            $('#partidaPersonalizada').hide();
            empezarPartida(palabra); 
        }

    });

    //Saco una palabra aleatoriamente de la BD y llamo a la funcion empezarPartida
    $('#bbdd').click(function(){
        $('#partidaPersonalizada').hide();
        $.ajax('palabra.php',{
            success:function(data){
                data = JSON.parse(data);
                empezarPartida(data[0]);
            }
        });
    });


    function empezarPartida(palabra){
        console.log(palabra);
        var j=1; //Contador donde indicamos las veces que ha fallado el usuario
        $('#menuInicio').hide(); //Escondemos el menuInicio
        $('#menuPartida').show(); //Mostramos el menuPartida
        $('#laPalabra').show(); //Mostramos el input Solucion 
        $('#filaLetras ').empty(); //Vaciamos los td que con tienen la palabra A-H-O-R-C-A-D-O
        for(var i=0 ; i<palabra.length ; i++){
            $('#filaLetras ').append($('<td>')); //Creamos tantos td como letras tiene la palabra
        }
        $('.grid-letra').click(function(){ //Añadimos un evento click a las letras del abecedario (grid-letra)
            var encontrada = false; //Boolean donde indicaremos si la letra es acertada
            $(this).css('background-color','red'); //Cambiamos el fondo por rojo
            $(this).off(); //Le quitamos el evento para que no se pueda volver a pulsarlo.
            var letra = $(this).html();
            for(var i=0 ; i<palabra.length ; i++){
                if(palabra[i] == letra){
                    $('#filaLetras td:nth-child('+(i+1)+')').append($(this).html()); //Recorreomos letra a letra la palabra y si coincide con la letra pulsada la añadimos al td(grid-letra)
                    encontrada = true;
                }

            }
            if(encontrada == false){ //Sino es acertada cambiamos la foto por la siguiente y sumamos un intento
                if(j!=9){
                    j++;
                    $('#partida').hide();
                    $('#partida').children().attr('src','img/'+j+'.png');
                    $('#partida').show();
                }else if(j==9){  //Si ya no tiene intentos llamamos a la funcion finalizarPartida
                    finalizarPartida(palabra,j); //
                }
            }
        });

        $('#resetear').click(function(){ //Recargamos la pagina si le da al boton empezar de nuevo
            location.reload();
        })
        $('#acertar').click(function(evento){ //Impedimos el submit y comprobamos si la palabra es correcta
            evento.preventDefault();
            var igual = false;
            var solucion =  $('#solucion').val().trim();
            for(var i=0 ; i<palabra.length ; i++){
                if(palabra[i] == solucion[i]){
                    igual = true;
                }else{
                    igual = false;
                }
            }
            if(igual == true){ //Si es correcta llamamos a la funcion finalizarPartida 
                finalizarPartida(palabra,j); 
            }else{ //Sino es acertada cambiamos la foto por la siguiente y sumamos un intento
                if(j!=9){ 
                    j++;
                    $('#partida').hide();
                    $('#partida').children().attr('src','img/'+j+'.png');
                    $('#partida').show();
                }else if(j==9){  //Si ya no tiene intentos llamamos a la funcion finalizarPartida y ocultamos el formulario #laPalabra
                    finalizarPartida(palabra,j);
                    $('#laPalabra').hide();
                }
            }
        });
    }
    //Funcion con la que finalizamos los eventos y terminamos la partida
    function finalizarPartida(palabra,veces){
        $('.grid-letra').off();
        for(var i=0 ; i<palabra.length ; i++){
            $('#filaLetras td:nth-child('+(i+1)+')').append(palabra[i]); //Rellenamos los td con la palabra aleatoria
        }
        if(veces==9){
            $('#filaLetras ').css('background-color','red'); //Si pierde la partida pintamos de rojo el fondo de lso td y la foto
             $('#partida').css('border','6px solid red');
            $('#partida').attr('border-color','red');
        }else{

            $('#filaLetras ').css('background-color','green'); //Si gana la partida pintamos de verde el fondo de los td y la foto
            $('#partida').hide();
            $('#partida').css('border','6px solid green');
            $('#partida').css('border-color','green');
            $('#partida').children().attr('src','img/win.png'); 
            $('#partida').show(); //Ocultamos el formulario #laPalabra y mostramos la foto ganadora
        }
    }
});