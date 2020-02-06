$(function(){
    //Cuando hacemos blur al input principal comprobamos que no esta vacio y creamos otra lista
    $('#createList').blur(function(){
        if($(this).val() != 0){
            var lista = $('<div>').addClass('list-item');
            var img = $('<img>').attr('src','img/papelera.png').addClass('borrar');
            var form = $('<form>').attr('action','').addClass('formDentro');
            var input = $('<input>').attr('type','text').attr('class','inputDentro');
            $('.list-container').append(lista);
            lista.append($(this).val());
            lista.append(img);
            lista.append(form);
            lista.hide();
            //Animacion para que la nueva lista salga
            lista.fadeIn('slow',function(){
                $(this).show();
            });
            form.append(input);
            //Vaciamos el input
            $(this).val("");

        }
    });
    //Cuando hacemos blur en el input dentro las nuevas listas creadas y comprobamos que no esta vacio crearemos una lista dentro
    $('body').on('blur','.inputDentro' ,function(){
        var valorInput = $(this).val();
        var ul = $('<ul>');
        if(valorInput != 0){
            var li = $('<li>').append(valorInput);
            var img = $('<img>').attr('src','img/papelera.png').addClass('borrar');
            ul.append(li);
            li.append(img);
            var padre = $(this).parent();
            padre.append(ul);
            ul.hide()
            //Animacion para mostrar la nueva lista
            ul.fadeIn('slow',function(){
               $(this).show(); 
            });
            //Vaciamos el input
            $(this).val("");


        }
    });
    //Funcion para que cuando pulsemos la img 'papelera' se borre la lista o li
    $('body').on('click','.borrar', function(){
        //Seleccionamos el padre 
        var padre = $(this).parent();
        //Animacion para eliminar
        padre.fadeOut('slow',function(){
            padre.remove();
        });

    });


});