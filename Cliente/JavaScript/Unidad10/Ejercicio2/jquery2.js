$(function() {
    $('p').each(function() {
        console.log( $(this).attr('id') );
    });
    $("img").removeClass('borde');
    $('#autor').html('Alejandro Salcedo Santamaria');
});