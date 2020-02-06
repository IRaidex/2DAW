<?php
if(!isAjax()) {
	//header('Location: /ejercicio1.html');
}

header("Content-type: text/html; charset=utf8");

$respuesta = [];
$respuesta['error'] = 0;
if(strcmp($_GET['seccion'], 'inicio')==0) {
	$respuesta['titulo'] = 'Printipal';
	$respuesta['contenido'] = '<h3>Nankatsu SC</h3>
		<div>El Nankatsu SC es un equipo proveniente de la prefectura de Shizuoka. Su entrenador es Bryan Shiroyama.</div>
		<div>El equipo está formado por los jugadores del instituto Nankatsu, junto con los del instituto Shutetsu, también contó con jugadores prominentes de otras escuelas dentro la prefectura. Todos estos jóvenes fueron seleccionados a través de partidos de prueba, con el objetivo de adaptarse al nivel creciente de fútbol que se estaba dando en otras regiones del país japones.</div>';
}
else if(strcmp($_GET['seccion'], 'plantilla')==0) {
	$respuesta['titulo'] = 'Plantilla';
	$respuesta['contenido'] = '<ol>
		<li>Benji Price (por)</li>
		<li>Takeshi Kishida (def)</li>
		<li>Koji Nishio (def)</li>
		<li>Masao Nakayama (def)</li>
		<li>Hanji Urabe (med)</li>
		<li>Shingo Takasugi (def)</li>
		<li>Hajime Taki (del)</li>
		<li>Mamoru Izawa (med)</li>
		<li>Teppei Kisugi (del)</li>
		<li>Oliver Atom (del)</li>
		<li>Tom Misaki (med)</li>
		<li>Alan Crocker (por)</li>
		<li>--</li>
		<li>Bruce Harper (def)</li>
	</ol>
	';
}
else if(strcmp($_GET['seccion'], 'partidos')==0) {
	$respuesta['titulo'] = 'Partidos';
	$respuesta['contenido'] = '
		New Team 2 vs 0 Mappet<br>
		New Team 4 vs 4 Toho<br>
		New Team 2 vs 3 Hanawa<br>
		New Team 5 vs 4 Nord Ford<br>
		New Team 2 vs 1 Mambo<br>
		New Team 3 vs 0 Shimada<br>
	';
}
else if(strcmp($_GET['seccion'], 'aficion')==0) {
	$respuesta['titulo'] = 'Afición';
	$respuesta['contenido'] = '
		<img src="https://i.ytimg.com/vi/PVUKAhTzReI/hqdefault.jpg" alt="afición1" class="fotoaficion"><br>
		<img src="https://vignette.wikia.nocookie.net/captaintsubasa/images/5/56/U-13_International_Europe_Stadium.jpg/revision/latest/scale-to-width-down/340?cb=20180306014302" alt="afición2" class="fotoaficion"><br>
		<img src="https://miro.medium.com/max/2868/1*WXXllKPGGbTgrZ9LuFSjFg.png" alt="afición3" class="fotoaficion"><br>
		
	';
}
else {
	$respuesta['error'] = 1;
	$respuesta['titulo'] = 'Error';
	$respuesta['contenido'] = 'La sección indicada no existe';
}

echo json_encode($respuesta);

function isAjax(){
   return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
   strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
?>