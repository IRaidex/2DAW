<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Multiplicacion</title>
    </head>
    <body>
        <?php
        echo "<table>";
        for($i=0; $i<=10; $i++){
            echo "<tr>";
            if($i==0){
                echo "<th>";
                echo "</th>";
            }else{
                echo "<th>";
                echo $i;
                echo "</th>";

            }
            for($j=1; $j<=10; $j++){
                if($i==0){
                    echo "<th>";
                    echo $j;
                    echo "</th>";
                }else{
                    echo "<td>";
                    echo $i*$j;
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>