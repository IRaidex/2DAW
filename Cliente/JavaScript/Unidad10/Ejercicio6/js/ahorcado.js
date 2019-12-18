$(function() {

    $.ajax('letras.php',{
        success:function(data){
            console.log(data);
            data = JSON.parse(data);
            for(var i=0 ; i<data.length ; i++){
                var div = $('<div>').addClass('grid-letra');
                div.append(data[i]);
                $('#panelLetras').append(div);
            }
        }
    });

    $('#manual').click(function(){
        $('#partidaPersonalizada').css('display','block');
    })

    $.ajax('palabra.php',{
        success:function(data){
            data = JSON.parse(data);
            console.log(data);
        }
    });

});
