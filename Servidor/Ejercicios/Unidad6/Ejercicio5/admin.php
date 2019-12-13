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

        <div class="jumbotron text-center header">
            <span id="cabecera">ADMIN</span> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="img/logo.png" alt="kfc" id="kfc">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="regristro.php">Registro</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="regristro.php">Login</a>
                    </li>                    
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row justify-content-center text-light bg-info">
                <div class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/Thylacoleo.jpg" alt="dodo">
                    <h1>Thylacoleo</h1>
                    <p>El Thylacoleo es una de las criaturas en ARK: Survival Evolved. Thylacoleo a menudo se esconde en lo alto de los árboles de secoya, boca abajo hacia su presa. Sin embargo, solo puede moverse hacia arriba y hacia abajo de árboles, acantilados o cualquier otra superficie escalable. Al ingresar al rango de aggro, el Thylacoleo saltará desde arriba, atrapando a cualquier presa por debajo de su peso, incluso derribando a los jugadores de cualquier montura.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/Giganotosaurus.jpg" alt="nutria">
                    <h1>Giganotosaurus</h1>
                    <p>El Giganotosaurus , que significa "lagarto gigante del sur", es uno de los dinosaurios en ARK: Survival Evolved. También se conoce simplemente como Gigano o incluso más simplemente, Giga. Los giganotosaurios deambularán 'casualmente' por la isla, matando cualquier cosa a su paso, esto puede llevarlos a deambular por casi cualquier lugar de la isla. Su falta de depredadores naturales, o realmente cualquier forma de amenaza para ellos, les permite sus viajes seguros a través de la isla.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/Tusoteuthis.jpg" alt="nutria">
                    <h1>Tusoteuthis</h1>
                    <p>El Tusoteuthis es una criatura acuática en ARK: Survival Evolved. Tusoteuthis se encuentra solo en aguas muy profundas, donde nada a un ritmo lento. Si ve al jugador o una criatura domesticada, comenzará a moverse hacia el jugador o dicha criatura y lo atacará. Debido al plan corporal único de los cefalópodos, un Tusoteuthis debe darse la vuelta para golpear con sus tentáculos.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img src="img/Titanosaurus.jpg" alt="nutria">
                    <h1>Titanosaurus</h1>
                    <p>El Titanosaurio es una de las Criaturas en ARK: Survival Evolved. Es la criatura más grande del juego (solo para ser derrotada por los Titanes, Rockwell y el Gusano de la Muerte Alfa), que se eleva incluso sobre el Brontosaurus y el Giganotosaurus. Es tan grande que el dinosaurio entrará en el juego mucho antes que otros recursos, árboles y animales.El Titanosaurio es una bestia enorme, pero tiene un inconveniente: una vez domesticado no come, por lo que vivirá hasta morir de hambre. 
                    </p>
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