<?php
session_start();
if(isset($_SESSION['user'])) {
    header('Location: index.php'); 
}

 if(isset($_POST['enviar'])){

    if($_POST['user'] != "" || $_POST['pass'] != ""){

        require_once"conexion.php";

        try {
            $consulta = $conexion->prepare('SELECT rol FROM users WHERE usuario = ? AND contrasenya = ?;');
            $consulta->bindParam(1, $_POST['user']);
            $consulta->bindParam(2, $_POST['pass']);
            $consulta->execute();

            $resultado=$consulta->fetch();

            if($resultado != null){

                $_SESSION['user'] = $_POST['user'];
                $_SESSION['pass'] = $_POST['pass'];
                $_SESSION['rol'] = $resultado[0];

                header('Location: index.php');

            }

        

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }


}

}


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
        <?php include"cabecera.php" ?>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 bg-light p-5">
                    <h1 class="text-info font-italic">Login</h1>
                    <form action="" method="post" class="text-left p-5">   
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <div class="text-center pt-5">
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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