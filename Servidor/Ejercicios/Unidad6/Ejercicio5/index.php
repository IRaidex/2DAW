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
        <?php if(!isset($_SESSION['user'])): ?>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <img class="img-fluid" src="img/topsecret.png" alt="">
                </div>
            </div>
        </div>
        <?php elseif(isset($_SESSION['rol']) && $_SESSION['rol']=='admin'): ?>
        <div class="container-fluid">
            <div class="row justify-content-center text-light bg-info">
                <div class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/Thylacoleo.jpg" alt="dodo">
                    <h1>Thylacoleo</h1>
                    <p>El Thylacoleo es una de las criaturas en ARK: Survival Evolved. Thylacoleo a menudo se esconde en lo alto de los árboles de secoya, boca abajo hacia su presa. Sin embargo, solo puede moverse hacia arriba y hacia abajo de árboles, acantilados o cualquier otra superficie escalable. Al ingresar al rango de aggro, el Thylacoleo saltará desde arriba, atrapando a cualquier presa por debajo de su peso, incluso derribando a los jugadores de cualquier montura.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/Giganotosaurus.jpg" alt="nutria">
                    <h1>Giganotosaurus</h1>
                    <p>El Giganotosaurus , que significa "lagarto gigante del sur", es uno de los dinosaurios en ARK: Survival Evolved. También se conoce simplemente como Gigano o incluso más simplemente, Giga. Los giganotosaurios deambularán 'casualmente' por la isla, matando cualquier cosa a su paso, esto puede llevarlos a deambular por casi cualquier lugar de la isla. Su falta de depredadores naturales, o realmente cualquier forma de amenaza para ellos, les permite sus viajes seguros a través de la isla.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/Tusoteuthis.jpg" alt="nutria">
                    <h1>Tusoteuthis</h1>
                    <p>El Tusoteuthis es una criatura acuática en ARK: Survival Evolved. Tusoteuthis se encuentra solo en aguas muy profundas, donde nada a un ritmo lento. Si ve al jugador o una criatura domesticada, comenzará a moverse hacia el jugador o dicha criatura y lo atacará. Debido al plan corporal único de los cefalópodos, un Tusoteuthis debe darse la vuelta para golpear con sus tentáculos.
                    </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/Titanosaurus.jpg" alt="nutria">
                    <h1>Titanosaurus</h1>
                    <p>El Titanosaurio es una de las Criaturas en ARK: Survival Evolved. Es la criatura más grande del juego (solo para ser derrotada por los Titanes, Rockwell y el Gusano de la Muerte Alfa), que se eleva incluso sobre el Brontosaurus y el Giganotosaurus. Es tan grande que el dinosaurio entrará en el juego mucho antes que otros recursos, árboles y animales.El Titanosaurio es una bestia enorme, pero tiene un inconveniente: una vez domesticado no come, por lo que vivirá hasta morir de hambre. 
                    </p>
                </div>
            </div>
        </div>
        <?php elseif(isset($_SESSION['rol']) && $_SESSION['rol']=='user'): ?>
        <div class="container-fluid">
            <div class="row justify-content-center text-light bg-info">
                <div class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/dodo2.jpg" alt="dodo">
                    <h1>Dodo</h1>
                    <p>El Dodo es una de las criaturas en ARK: Survival Evolved. Se utiliza principalmente como una especie de 'pollo', que produce una gran cantidad de huevos que se pueden comer para una gran cantidad de alimento.</p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/nutria2.jpg" alt="nutria">
                    <h1>Nutria</h1>
                    <p>La 'Nutria' es una de las Criaturas en ARK: Survival Evolved que se expecializan en pescar y encontrar perlas. Las nutrias pasan toda su vida en el agua, lanzándose rápidamente sin alejarse demasiado de su origen. Se dirigen a los peces, desde los que pueden cosechar pescado crudo, perlas de sílice y perlas negras. </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/tortuga.jpg" alt="nutria">
                    <h1>Carbonemys</h1>
                    <p>El Carbonemys a menudo simplemente se conoce como Tortuga, es una especie de criatura en ARK: Survival Evolved. Carbonemys es una criatura neutral, y luchará solo si es atacada o si tomas uno de sus huevos. Como el Stegosaurus defenderán a otros Carbonemys. Al ser atacado, Carbonemys puede lanzar un ataque bastante castigador, pero nada demasiado fatal. Su velocidad de movimiento extremadamente baja les permite ser fácilmente atacados y sacrificados por carne desde el principio, sin embargo, tienen una gran cantidad de salud y requieren bastante tiempo para matar. </p>

                </div>
                <div  class="col-md-5 col-sm-12 bg-dark ">

                    <img class="img-fluid" src="img/daedon.jpg" alt="nutria">
                    <h1>Daeodon</h1>
                    <p>El Daeodon (dee-o-don) es una de las criaturas en ARK: Survival Evolved. Los viajeros de Ark normalmente encontrarán a Daeodon viajando en manadas, devorando todo lo que esté a la vista. Una vez que se inicia el combate, uno o, a veces, todo el paquete producirá un efecto de feromona para mejorar la regeneración de salud de las criaturas amigas. </p>

                </div>
            </div>
        </div>
        <?php endif ?>
        <footer id="sticky-footer" class="py-4 bg-dark text-white">
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