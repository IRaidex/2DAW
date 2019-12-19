<?php
session_start();
if(isset($_SESSION['user'])) {
    header('Location: index.php'); 
}

if(isset($_POST['enviar'])){

    if($_POST['user'] != "" || $_POST['pass'] != ""){

        require_once"conexion.php";

        try {
            $consulta = $conexion->prepare('SELECT usuario,rol,contrasenya FROM users WHERE usuario = ?;');
            $consulta->bindParam(1, $_POST['user']);
            $consulta->execute();

            $resultado=$consulta->fetch();
         
            if($resultado != null){
                if(password_verify($_POST['pass'], $resultado['contrasenya'])){
                    $_SESSION['user'] = $_POST['user'];
                    $_SESSION['rol'] = $resultado['rol'];
                    header('Location: index.php');
                }
               
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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include"cabecera.php" ?>
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 bg-light p-5">
                    <h1 class="text-info font-italic">Login</h1>
                    <form action="#" method="post" class="text-left p-5">   
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