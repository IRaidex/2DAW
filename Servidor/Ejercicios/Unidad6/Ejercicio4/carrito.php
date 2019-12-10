<?php
session_start();
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
            footer{
                justify-content: space-around;
                margin-top: 13%;
            }
            #rojo{
                color: red;
            }
            #cesta{
                padding: 1%;
            }
            #kfc{
                width: 75px;
                height: 75px;
            }
        </style>
    </head>
    <body>



        <div class="jumbotron text-center header">
            <span id="cabecera">Fruteria</span> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="img/kfc.png" alt="kfc" id="kfc">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="badulaque.php">Badulaque <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="carrito.php">Carrito</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="cesta">
            <h1>Cesta de la compra</h1>
            <ul>
                <?php foreach ($_SESSION as $nombre => $valor): ?>
                <?php if(isset($nombre)): ?>
                <li><?= $nombre ?> : <?= $valor ?></li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
            <a href="javascript:history.back()"><button>Atras</button></a>
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
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