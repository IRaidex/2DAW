<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div{
            float: left;
            text-align: center;
        }
        img{
            height: 100px;
            width: 100px;
        }
    
    </style>
</head>
<body>
    <?php
    
        $numero4= rand(1,4);    
        $numero6= rand(1,6);    
        $numero8= rand(1,8);    
        $numero10= rand(1,10);    
        $numero102= rand(1,10);    
        $numero12= rand(1,12);
        $numero20= rand(1,20);
    
    
        $imagenes= array("dado4","dado6","dado8","dado10","dado10","dado12","dado20");
    
        for($i=0 ; $i<count($imagenes) ; $i++){
            echo "<div>";
            echo '<img src="'.$imagenes[$i].'.png"  alt="dado"> <br>';
            
            if($i==0){
                echo $numero4;
            }else if($i==1){
                echo $numero6;
            }else if($i==2){
                echo $numero8;
            }else if($i==3){
                echo $numero10;
            }else if($i==4){
                echo $numero102;
            }else if($i==5){
                echo $numero12;
            }else if($i==6){
                echo $numero20;
            }
            
            echo "</div>";
        }
    ?>
</body>
</html>