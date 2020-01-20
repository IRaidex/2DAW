$(function() {


    $.getJSON('/Ejercicio2/coches.php', function(data){
        for(var i=0 ; i<data.length ; i++){
            var div = $('<div>').addClass('col-md-4 p-2').attr('id','d'+data[i][0]);
            div.append($('<img>').attr('src','img/coches/'+data[i][1]+'.png').attr('alt','coche'));
            $('.row').append(div);
        }
    });

    $('.row').on('click','img' , function (){
        var ancho = screen.width;
        var altura = screen.height;
        var clon = $(this).clone();
        var div = $('<div>').addClass('click').css('height',altura).css('width',ancho);
        $('.row').append(div);
        clon.css('height',altura/2).css('width',ancho/2).css('margin-top','5%').attr('id','clon');
        div.append(clon);
    });

    $('.row').on('click','div.click' , function (){
        $('.click').remove();
    });


});