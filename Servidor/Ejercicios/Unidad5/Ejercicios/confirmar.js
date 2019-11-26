function confirmar(tabla,valor){
    let url = 'borrar.php?tabla='+tabla+'&codigo='+valor;
    if(confirm("Seguro que quieres borrar?")){
        location.href = url;
    }
}