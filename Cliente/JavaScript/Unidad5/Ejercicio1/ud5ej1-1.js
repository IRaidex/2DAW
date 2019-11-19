/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud5ej1-1.js
*/

document.addEventListener("DOMContentLoaded", funCargar);

function funCargar(){

    var headers=document.getElementsByTagName("header");
    var footers=document.getElementsByTagName("footer");
    var sections=document.getElementsByTagName("section");
    var articles=document.getElementsByTagName("article");
    var divs=document.getElementsByTagName("div");
    var p=document.getElementsByTagName("p");
    var a=document.getElementsByTagName("a");
    var img=document.getElementsByTagName("img");

    alert("Header: "+headers.length+"\n"+
          "Footer: "+footers.length+"\n"+
          "Sections: "+sections.length+"\n"+
          "Article: "+articles.length+"\n"+
          "Divs: "+divs.length+"\n"+
          "P: "+p.length+"\n"+
          "A: "+a.length+"\n"+
          "Img: "+img.length+"");
}