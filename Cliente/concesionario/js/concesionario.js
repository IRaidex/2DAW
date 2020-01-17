$(function() {


    $.getJSON('/coches.php', function(data){
        for(var i=0 ; i<data.length ; i++){
            var div = $('<div>').addClass('col-md-4 p-2');
            div.append($('<img>').attr('src','img/coches/'+data[i][1]+'.png').attr('alt','coche').attr('id','c'+data[i][0]));
            $('.row').append(div);
        }
    });

    $('body').on('mouseenter','img' , function (){
       var id = $(this).attr('id');
        id = id.split('c')[1];
        console.log(id);
        $.post({url: '/sacarDatos.php',
                data:{'id':id},
                success: function(data){
                    console.log(data);
                }
               });
    });




});