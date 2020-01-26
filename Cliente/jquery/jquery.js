$(function(){
    $('li').click(function(){
        var id = $(this).attr('id').split('alumno'); 
        console.log(id);
        window.location.href = '/jquery/alumno.php?id='+id[1];
    });

    $('span').click(function(){
        var id = 'input'+$(this).attr('id');
        var input = $('<input>').attr('id',id).val($(this).html());
        $(this).append(input);
        input.select();
        localStorage.setItem('span', $(this).html());
    });

    $('body').on('blur', 'input' , function(){
        var campo = $(this).attr('id').split('input')[1];
        var idAl = $('div').attr('id').split('alumno')[1];
        var valor = $(this).val();
        console.log(campo,idAl,valor);
        $.post({url: 'actualizarDatos.php',
                data: { idAlumno : idAl , campoActualizar : campo , valor : valor },
                success: function(data){

                    console.log(data);

                },
                dataType: 'json'
               });

    });

});