<?php
session_start();
require_once"conexion.php";

try {
    $listaProductos = $conexion->query('SELECT * FROM productos;');
    $arrayProductos = [];
    while($registro = $listaProductos->fetch()){
        $arrayProductos[$registro['nombre']] = $registro;
    }  

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}


if(isset($_POST["opcion"])){

    $boton = $_POST["opcion"];
    $nombre = $_POST["nombre"];
    
   echo $arrayProductos[$nombre][4];
    
    if($boton == "borrar"){
        unset($_SESSION[$nombre]);
    }else{
        if(!isset($_SESSION[$nombre])){
            if($boton == "+1"){
                echo $_SESSION[$nombre] = 1;    
            } 
        }else{
            if($_SESSION[$nombre] < $arrayProductos[$nombre]["stock"]){
                echo $_SESSION[$nombre] += (int)$boton;
                echo "nombre = $nombre<br>$_SESSION[$nombre] == 0 ?";
                if($_SESSION[$nombre] == 0) unset($_SESSION[$nombre]);
            }

        }
    }


}



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fruteria</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <style>

            .row{
                text-align: center;
                padding: 3%;
            }
            .header{
                font-size: 75px;
                background: url('img/fondo.jpg')center;
                color: #462ee0;
                margin: 0;
            }

            #cabecera{
                font-size: 100px;
            }

            img{
                width: 350px;
                height: 350px;
            }

            .imagenes{
                width: 50px;
                height: 50px;
            }
            .galeria{
                padding: 1%;
                text-align:center;

            }
            .footer{
                justify-content: space-around;
            }
        </style>
    </head>
    <body>
<!--
<pre>session => <?php print_r ($_SESSION) ?></pre>
<pre>post => <?php print_r ($_POST) ?></pre>
<pre>$arrayProductos => <?php print_r ($arrayProductos) ?></pre>
-->
        <div class="jumbotron text-center header">
            <span id="cabecera">Fruteria</span> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <?php if($error): ?>
                <?=  $error ?>
                <?php else: ?>
                <?php foreach ($arrayProductos as $valor): ?>
                <div class="col-md-6 galeria">
                    <p><?=$valor['nombre'] ?></p>
                    <img src="<?=$valor['imagen'] ?>" alt="fruta">
                    <p>Precio: <?=$valor['precio'] ?>€/<?=$valor['unidad'] ?></p>
                    <p>Stock: <?=$valor['stock'] ?></p>
                    <form action="#" method="post">
                        <button type="submit" name="opcion" value="+1"><img class="imagenes" src="img/productos/mas.png" alt="sumar"></button>
                        <button type="submit" name="opcion" value="-1"><img class="imagenes" src="img/productos/menos.png" alt="restar"></button>
                        <button type="submit" name="opcion" value="borrar"><img class="imagenes" src="img/productos/papelera.png" alt="borrar"></button>
                        <input type="hidden" name="nombre" value="<?=$valor['nombre'] ?>">
                    </form>
                </div>
                <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; Your Website</small>
            </div>            
            <div class="container text-center">
                <small>Email: fruteria@gmail.com</small>
            </div>
            <div class="container text-center">
                <small>Telefono: 961331449</small>
            </div>
        </footer>

    </body>
</html>