$(function() {


    $.getJSON('/coches.php', function(data){
        for(var i=0 ; i<data.length ; i++){
            var div = $('<div>').addClass('col-md-4 p-2').attr('id','d'+data[i][0]);
            div.append($('<img>').attr('src','img/coches/'+data[i][1]+'.png').attr('alt','coche').attr('id','c'+data[i][0]));
            $('.row').append(div);
        }
    });

    $('body').on('mouseenter','img' , function (){
        var id = $(this).parent().attr('id').split('d')[1];
        $.post({url: '/sacarDatos.php',
                data:{'id':id},
                success: function(data){

                    var div = $('<div>').attr('id','f'+id);
                    var logo = data[0]['logo'];
                    var img = $('<img>').attr('src','img/marcas/'+data[0]['logo']+'.png').attr('alt','marca');
                    var pmarca = $('<p>').append('Marca: ').append(img);
                    div.append(pmarca);
                    div.append($('<p>').append('Modelo: '+data[0]['modelo']));
                    div.append($('<p>').append('Precio: '+data[0]['precio']));
                    div.append($('<p>').append('Estado: '+data[0]['estado'])); 
                    $('#d'+id).append(div);
                    div.hide();

                    div.slideDown( "slow" , function() {
                        div.show();
                    });

                },dataType: 'json'
               });
    });


    $('body').on('mouseout','img' , function (){

        var id = $(this).parent().attr('id').split('d')[1];

        $('#f'+id).slideUp( "slow" , function() {
            $('#f'+id).remove();        
        });

    })

});