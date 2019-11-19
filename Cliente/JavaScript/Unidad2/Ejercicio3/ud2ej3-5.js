/*
autor: Alex Salcedo Santamaria                    

ejercicio:  ud2ej3-5
*/

var i=0;
var j=0;
document.write("<table>");
for(i=0; i<=10; i++){
    document.write("<tr>");
    if(i==0){
        document.write("<th>");
        document.write("</th>");
    }else{
        document.write("<th>");
        document.write(i);
        document.write("</th>");
    }
    for(j=1; j<=10; j++){
        if(i==0){
            document.write("<th>");
            document.write(j);
            document.write("</th>");
        }else{
            document.write("<td>");
            document.write(i*j);
            document.write("</td>");
        }
    }
    document.write("</tr>");
}
document.write("</table>");