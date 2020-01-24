$(function(){
    $('li').click(function(){
        var id = $(this).attr('id').split('alumno'); 
        console.log(id);
        window.location.href = '/jquery/alumno.php?id='+id[1];
    });

    $('span').click(function(){
        var id = 'i'+$(this).attr('id');
        var input = $('<input> option:selected').attr('id',id).val($(this).html());
        $(this).append(input);
        input.select();
    });

    $('body').on('blur', 'input' , function(){
        console.log('hola')
        $(this).remove();
    });

});