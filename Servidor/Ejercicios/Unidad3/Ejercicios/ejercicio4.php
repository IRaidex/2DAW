<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <style>
            div{
                color:red;
            }
        </style>
    </head>
    <body>

        <?php

        $error_usu = '';
        $error_nom = '';
        $error_ape = '';
        $error_dni = '';
        $error_dir = '';
        $error_tel = '';
        $correo="";
        $fecha="";


        if(isset($_POST['boton'])){
            $mensaje=false;
            $correo=$_REQUEST['mail'];
            $fecha=$_REQUEST['fecha'];

            if(!preg_match('/^[a-zA-Z0-9]{3,}/', $_REQUEST['usuario'])){
                $error_usu = ' ';
                $mensaje=true;
            }else{
                $error_usu = $_REQUEST['usuario'];
            }

            if(!preg_match('/^[a-zA-Z]{3,}/', $_REQUEST['nombre'])){
                $error_nom=" ";
                $mensaje=true;
            }else{
                $error_nom= $_REQUEST['nombre'];
            }


            if(!preg_match('/^[a-zA-Z]{7}/', $_REQUEST['apellidos'])){
                $error_ape=" ";
                $mensaje=true;
            }else{
                $error_ape=$_REQUEST['apellidos'];
            }


            if(!preg_match('/^[0-9]{7,8}[A-Z]$/', $_REQUEST['dni'])){
                $error_dni=" ";
                $mensaje=true;
            }else{
                $error_dni=$_REQUEST['dni'];
            }


            if(!preg_match('/^[a-zA-Z0-9,\/]{10,}/', $_REQUEST['direccion'])){
                $error_dir=" ";
                $mensaje=true;
            }else{
                $error_dir = $_REQUEST['direccion'];
            }


            if(!preg_match('/^[9|6|7][0-9]{8}$/', $_REQUEST['telefono'])){
                $error_tel=" ";
                $mensaje=true;
            }else{
                $error_tel= $_REQUEST['telefono'];
            }
            if($mensaje==false) echo "Registrado Correctamente!";
        }


        ?>

        <h1>Candidatos</h1>

        <form action="candidatos.php" method="POST">

            <p>Usuario</p>
            <input type="text" name="usuario" value='<?php if($error_usu != " ") echo $error_usu ?>'> <?php if($error_usu == " ") echo '<div> Tienes que introducir minimo 3 caracteres.</div>' ?>
            <br>

            <p>Nombre</p>
            <input type="text" name="nombre" value="<?php if($error_nom != " ") echo $error_nom ?>"><?php if($error_nom == " ") echo '<div> Tienes que introducir minimo 3 caracteres.</div>' ?>
            <br>

            <p>Apellidos</p>
            <input type="text" name="apellidos" value="<?php if($error_ape != " ") echo $error_ape ?>"><?php if($error_ape == " ") echo '<div> Tienes que introducir minimo 8 caracteres.</div>' ?>
            <br>

            <p>DNI</p>
            <input type="text" name="dni" value="<?php if($error_dni != " ") echo $error_dni ?>"><?php if($error_dni == " ") echo '<div> Tienes que introducir minimo 8 numeros u una letra alfinal.</div>' ?>
            <br>

            <p>Dirección</p>
            <input type="text" name="direccion" value="<?php if($error_dir != " ") echo $error_dir ?>"><?php if($error_dir == " ") echo '<div> Tienes que introducir minimo 8 numeros u una letra alfinal.</div>' ?>
            <br>

            <p>Mail</p>
            <input type="email" name="mail" required value="<?php echo $correo ?>">
            <br>

            <p>Telefono</p>
            <input type="text" name="telefono" value="<?php if($error_tel != " ") echo $error_tel ?>"><?php if($error_tel == " ") echo '<div> Tienes que introducir 9 numeros.</div>' ?>
            <br>

            <p>Fecha</p>
            <input type="date" name="fecha" required value="<?php echo $fecha ?>">
            <br>

            <br>
            <input type="submit" name="boton" value="Enviar">

        </form>
    </body>
</html>