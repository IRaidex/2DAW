<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ark</title>
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
                background: url('img/hero.jpg');
                background-size: cover;
                color: #462ee0;
                margin: 0;
                padding: 3.3em;
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
<!--
            <span id="cabecera">Fruteria</span> 
-->
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
                        <a class="nav-link" href="regristro.php">Registro/Login</a>
                    </li>                    
                </ul>
            </div>
        </nav>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                   
                   
                   
                </div>
            </div>
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
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