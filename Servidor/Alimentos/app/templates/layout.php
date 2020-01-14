<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Desarrollo web en entorno servidor - tema 10 - MVC</title>
	
	<link rel="stylesheet" href="<?= '/css/'.Config::$mvc_vis_css ?>"/>
</head>
<body>
	<header>
		<h1>Información de alimentos</h1>
	</header>

	<nav>
		<ul>
			<li><a href="/">Inicio</a></li>
			<li><a href="/listar">Ver alimentos</a></li>
			<li><a href="/insertar">Insertar alimento</a></li>
			<li><a href="/buscar">Buscar por nombre</a></li>
			<li><a href="/buscarAlimentosPorEnergia">Buscar por energía</a></li>
			<li><a href="/buscarAlimentosCombinada">Búsqueda combinada</a></li>
		</ul>
	 </nav>

	<main>
		<?= $contenido ?>
	</main>

	<footer id="pie"> - Desarrollo Web en Entorno Servidor -</footer>
</body>
</html>
