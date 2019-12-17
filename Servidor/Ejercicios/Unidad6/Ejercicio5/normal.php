<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ARK Evolved</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <style>

            .row > div{
                text-align: center;
                margin: 3%;
                padding: 3%;
            }
            .header{
                font-size: 75px;
                background: url('img/hero.jpg');
                background-size: cover;
                color: black;
                margin: 0;
                padding: 3.3em;
            }

            #cabecera{
                font-size: 100px;
            }

            img{
                width: 500px;
                height: 350px;
            }
            .footer{
                justify-content: space-around;
            }
            #rojo{
                color: red;
            }
            #kfc{
                width: 100px;
                height: 75px;
            }
            nav{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php include"cabecera.php" ?>
        <div class="container-fluid">
            <div class="row justify-content-center text-light bg-info">
                <div class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/dodo2.jpg" alt="dodo">
                    <h1>Dodo</h1>
                    <p>El Dodo es una de las criaturas en ARK: Survival Evolved. Se utiliza principalmente como una especie de 'pollo', que produce una gran cantidad de huevos que se pueden comer para una gran cantidad de alimento.</p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/nutria2.jpg" alt="nutria">
                    <h1>Nutria</h1>
                    <p>La 'Nutria' es una de las Criaturas en ARK: Survival Evolved que se expecializan en pescar y encontrar perlas. Las nutrias pasan toda su vida en el agua, lanzándose rápidamente sin alejarse demasiado de su origen. Se dirigen a los peces, desde los que pueden cosechar pescado crudo, perlas de sílice y perlas negras. </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/tortuga.jpg" alt="nutria">
                    <h1>Carbonemys</h1>
                    <p>El Carbonemys a menudo simplemente se conoce como Tortuga, es una especie de criatura en ARK: Survival Evolved. Carbonemys es una criatura neutral, y luchará solo si es atacada o si tomas uno de sus huevos. Como el Stegosaurus defenderán a otros Carbonemys. Al ser atacado, Carbonemys puede lanzar un ataque bastante castigador, pero nada demasiado fatal. Su velocidad de movimiento extremadamente baja les permite ser fácilmente atacados y sacrificados por carne desde el principio, sin embargo, tienen una gran cantidad de salud y requieren bastante tiempo para matar. </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/daedon.jpg" alt="nutria">
                    <h1>Daeodon</h1>
                    <p>El Daeodon (dee-o-don) es una de las criaturas en ARK: Survival Evolved. Los viajeros de Ark normalmente encontrarán a Daeodon viajando en manadas, devorando todo lo que esté a la vista. Una vez que se inicia el combate, uno o, a veces, todo el paquete producirá un efecto de feromona para mejorar la regeneración de salud de las criaturas amigas. </p>

                </div>
            </div>
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-light">
            <div class="container text-center">
                <small>Copyright &copy; Your Website</small>
            </div>            
            <div class="container text-center">
                <small>Email: ark@gmail.com</small>
            </div>
            <div class="container text-center">
                <small>Telefono: 961331449</small>
            </div>
        </footer>

    </body>
</html>