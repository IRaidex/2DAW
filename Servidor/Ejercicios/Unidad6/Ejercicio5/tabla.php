<?php
session_start();

if($_SESSION['rol'] == 'user'){
     header('Location: index.php');
}

require_once"conexion.php";

$consulta = $conexion->query('SELECT nombre,apellido1,apellido2,usuario,rol FROM users;');
$resultado = $consulta->fetchAll(PDO::FETCH_NUM);

$cont=1;

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
        <div class="container-fluid">
            <div class="row justify-content-center text-light bg-info">
                <div class="col-md-6 col-sm-12">

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Primer Apellido</th>
                                <th scope="col">Segundo Apellido</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $valor): ?>
                            <tr>

                                <th scope="row"><?= $cont++  ?></th>
                                <?php foreach ($valor as $valor2): ?>


                                <td><?= $valor2 ?></td>
                                <?php endforeach ?>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

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