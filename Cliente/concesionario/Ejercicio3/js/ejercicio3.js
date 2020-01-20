$(function() {


    $.getJSON('/Ejercicio2/coches.php', function(data){
        for(var i=0 ; i<data.length ; i++){
            var div = $('<div>').addClass('col-md-4 p-2').attr('id','d'+data[i][0]);
            div.append($('<img>').attr('src','img/coches/'+data[i][1]+'.png').attr('alt','coche'));
            $('.row').append(div);
        }
    });

    $('.row').on('click','div' , function (){
        var divClonado = $(this).clone().addClass('click');
        $(this).append(divClonado);
        divClonado.first().animate({
            left: 1700,
            bottom: 500,
            opacity: 0
        }, {
            duration: 500,complete:  function() {
                divClonado.remove();
            }
        });

    });

});