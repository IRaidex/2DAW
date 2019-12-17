
<div class="jumbotron text-center header">

    <span id="cabecera">ARK</span> 

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
                <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'admin'): ?>
            <li class="nav-item active">
                <a class="nav-link" href="tabla.php">Tabla</a>
            </li>
            <?php endif ?>
            <?php if(isset($_SESSION['user'])): ?>
            <li class="nav-item active text-align-right">
                <a class="nav-link" href="cerrar.php">Logout</a>
            </li>
            <?php endif ?>

        </ul>
    </div>
</nav>