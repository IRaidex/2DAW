$(function(){
    $('li').click(function(){
        var id = $(this).attr('id').split('alumno'); 
        window.location.href = '/jquery/alumno.php?id='+id[1];
    });

    $('span').click(function(){
        localStorage.setItem('valorSpan',$(this).html());
        var id = 'input'+$(this).attr('id');
        var input = $('<input>').attr('class',id).val($(this).html());
        $(this).html('');
        $(this).append(input);
        input.select();
        localStorage.setItem('span', $(this).html());
    });

    $('div').on('blur', 'input' , function(){
        var campo = $(this).attr('class').split('input')[1];
        var idAl = $('div').attr('id').split('alumno')[1];
        var valor = $(this).val();
        if(valor != localStorage.getItem('valorSpan')){
            $.post({url: 'actualizarDatos.php',
                    data: { idAlumno : idAl , campoActualizar : campo , valor : valor },
                    success: function(data){

                        if(data){
                            $('#'+campo).html(valor);
                        }else{
                            $('#'+campo).html(localStorage.getItem('valorSpan'));
                        }
                        
                    },
                    dataType: 'json'
                   });
        }
        $('#'+campo).html(localStorage.getItem('valorSpan'));
        $(this).remove();
    });

    $('td').click(function(){
        localStorage.setItem('valorTd',$(this).html());
        var id = 'input'+$(this).parent().attr('id').split('al')[1];
        var input = $('<input>').attr('id',id).val($(this).html());
        input.css('width',20);
        $(this).html('');
        $(this).append(input);
        input.select();

    });

    $('table').on('blur', 'input' , function(){
        var id = $(this).attr('id').split('input')[1];
        var actividad = $(this).parent().attr('class').split('act')[1];
        var valor = $(this).val();
         if(valor != localStorage.getItem('valorTd')){
                     $.post({url: 'actualizarNotas.php',
                data: { idAlumno : id , idActividad : actividad , valor : valor },
                success: function(data){
                    if(data){
                        $(this).parent().html(valor);
                    }else{
                        $(this).parent().html(localStorage.getItem('valorTd'));
                    }
                },
                dataType: 'json'
               });
         }
        $(this).parent().html(localStorage.getItem('valorTd'));
        $(this).remove();
    });



});