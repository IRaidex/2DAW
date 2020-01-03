
<div class="jumbotron text-center img-fluid header m-0 text-info">
    <h1 class="display-1">ARK</h1> 
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" alt="kfc" id="kfc">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <?php if(!isset($_SESSION['user'])): ?>
            <li class="nav-item active">
                <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <?php endif ?>
            <?php if(!isset($_SESSION['user'])): ?>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php endif ?>

            <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'admin'): ?>
            <li class="nav-item active">
                <a class="nav-link" href="tabla.php">Tabla</a>
            </li>
            <?php endif ?>
        </ul>
    </div>
    <?php if(isset($_SESSION['user'])): ?>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item active navbar-right">
            <a class="nav-link" href="cerrar.php">Logout</a>
        </li>
    </ul>
    <?php endif ?>
</nav>
