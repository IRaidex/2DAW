var personajes = JSON.parse(personajes);

$(function() {
    var cantidad = 5;
    var veces= 0;

    cargarPj(personajes,cantidad,veces);
    veces++;

    document.addEventListener("scroll",eliminar);

    function eliminar(){
        var alturaWeb=document.body.offsetHeight;
        var altura=window.scrollY;
        var alturaVisible=window.innerHeight;

        if(altura+alturaVisible>=alturaWeb){
            cargarPj(personajes,cantidad,veces);
            veces++;
        }
    }
});


function cargarPj(personajes,cantidad,veces){

    var cantidadFinal=0;
    if(cantidad*(veces+1)-1 > personajes.length){
        cantidadFinal=personajes.length;
    }else{
        cantidadFinal=cantidad*(veces+1);
    }

    
    
    for(var i=cantidad*veces; i<cantidadFinal; i++) {
        
        
        var article = $('<article>').attr('class','personaje');
        article.append($('div').attr('class','nombre').html(personajes[i].name));
        
        var divAvatar = $('div').attr('class','avatar');
        divAvatar.append($('img').attr({ alt: personajes[i].name , src: pesonajes[i].image}));
        article.append(divAvatar);
        
        var divDatos = $('div').addClass('datos');
        article.append(divDatos);
        
        var divInfo = $('div').addClass('info');
        divInfo.append('Especie: '+personajes[i].species+'<br>'+'Genero: '+personajes[i].gender);
        divInfo.append($()'<img src="'+personajes[i].gender+'.png" class="genero">');
        
        
        
       $('section').append(article); 
        
        
        /*var article = document.createElement('article');
        article.setAttribute('class', 'personaje');

        var div1 = document.createElement('div');
        div1.setAttribute('class', 'nombre');
        div1.innerHTML = personajes[i].name;
        article.appendChild(div1);

        var div2 = document.createElement('div');
        div2.setAttribute('class', 'avatar');
        var img = document.createElement('img');
        img.setAttribute('src', personajes[i].image);
        img.setAttribute('alt', personajes[i].name);
        div2.appendChild(img);
        article.appendChild(div2);

        var div3 = document.createElement('div');
        div3.setAttribute('class', 'datos');
        var div4 = document.createElement('div');
        div4.setAttribute('class', 'info');

        div4.innerHTML ='Especie: '+personajes[i].species+'<br>'+'Genero: '+personajes[i].gender+
            ' <img src="'+personajes[i].gender+'.png" class="genero">'+'<br>'+
            'Origin: '+personajes[i].origin.name+'<br>'+
            'Estado: <span class="alive">'+personajes[i].status+'</span>'+'<br>'+
            'Episodios: '+personajes[i].episode.length;

        div3.appendChild(div4);
        article.appendChild(div3);

        var section = document.getElementsByTagName('section');
        section[0].appendChild(article);*/


    }


}