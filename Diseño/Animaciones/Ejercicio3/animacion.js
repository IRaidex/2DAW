$(function() {

    //Evito el submit , compruebo que la palabra tiene longitud mayo a 0 y llamo a la funcion empezarPartida
    $('#empezar').click(function(evento){
        evento.preventDefault();
        var palabra = $('#campopalabra').val().trim();
        if(palabra.length != 0){
            $('#partidaPersonalizada').hide();
            empezarPartida(palabra); 
        }

    });

    $('#path3745').click(function(evento){
        $('#path3745').addClass('mover');
    });    

    $('#path3743').click(function(evento){
        $('#path3743').addClass('mover');
    });    

    $('#path3741').click(function(evento){
        $('#path3741').addClass('mover');
    });    

    $('#path3739').click(function(evento){
        $('#path3739').addClass('mover');
    });  

    $('#path3737').click(function(evento){
        $('#path3737').addClass('mover');
    });

    $('#path3735').click(function(evento){
        $('#path3735').addClass('mover');
    });

    $('#path3724').click(function(evento){
        $('#path3724').addClass('mover');
    });



});