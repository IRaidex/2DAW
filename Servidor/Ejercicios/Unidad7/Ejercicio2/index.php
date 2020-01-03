<?php
session_start();
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$opcion = "";

if(isset($_POST['enviar'])){
    echo $_POST['idioma'];
    if($_POST['idioma'] == "1"){
        $_SESSION['idioma'] = "es";
        $opcion="castellano.php";
        header('Location: index.php');
    }else if($_POST['idioma'] == "2"){
        $_SESSION['idioma'] = "val";
        $opcion="valenciano.php";
        header('Location:  index.php');
    }else if($_POST['idioma'] == "3"){
        $_SESSION['idioma'] = "ing";
        $opcion="ingles.php";
        header('Location:  index.php');
    }

    $arrayIdiomas = ['es' => 'castellano.php', 'val' => 'valenciano.php', 'ing' => 'ingles.php'];

}

echo $_SESSION['idioma'];

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Marc Márquez</title>
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
                background: url('cabecera.jpg')center;
                color: #462ee0;
                margin: 0;
            }

            #cabecera{
                font-size: 100px;
            }
            .footer{
                justify-content: space-around;
            }
        </style>
    </head>
    <body>
        <?php if(!isset($_SESSION['idioma'])): ?>
            <?php require_once'castellano.php' ?>
        <?php else: ?>
            <?php require_once $opcion ?>
        <?php endif ?>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; Your Website</small>
            </div>            
            <div class="container text-center">
                <small>Email: marcmarquez@gmail.com</small>
            </div>
            <div class="container text-center">
                <small>Telefono: 961331449</small>
            </div>
        </footer>

    </body>
</html>