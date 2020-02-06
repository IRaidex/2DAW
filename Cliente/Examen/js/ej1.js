$(function(){
   
    $('.tab-item').click(function(){
        
        var id = $(this).attr('id');
/*
        console.log(id);
*/
        $.post({ url:'ejercicio1.php',
                data: id,
            success: function(data){
                console.log(data);
                $('#titulo').text(data);
                $('#contenido').text(data);
            },dataType: 'json'
        });
    });
    
    
});