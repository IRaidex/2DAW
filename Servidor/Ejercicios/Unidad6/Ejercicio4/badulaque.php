<?php

require_once"conexion.php";

try {
    $listaProductos = $conexion->query('SELECT * FROM productos;');
    $arrayProductos = [];
    while($registro = $listaProductos->fetch()){
        $arrayProductos[] = $registro;
    }  

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
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
                    <p>Precio: <?=$valor['precio'] ?></p>
                    <p>Unidad: <?=$valor['unidad'] ?></p>
                    <p>Stock: <?=$valor['stock'] ?></p>
                    <button type="submit" name="añadir" value="+1"><img class="imagenes" src="img/productos/mas.png" alt="mas"></button>
                    <button type="submit" name="quitar" value="-1"><img class="imagenes" src="img/productos/menos.png" alt="mas"></button>
                    <button type="submit" name="papelera" value="borrar"><img class="imagenes" src="img/productos/papelera.png" alt="mas"></button>
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
                <small>Email: game@gmail.com</small>
            </div>
            <div class="container text-center">
                <small>Telefono: 961331449</small>
            </div>
        </footer>

    </body>
</html>