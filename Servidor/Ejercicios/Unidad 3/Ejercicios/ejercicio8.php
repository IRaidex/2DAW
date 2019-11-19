<?php

$array=$_GET["variable"];
$logo = imagecreatefrompng($array);

$blanco = imagecolorallocate($logo, 255, 0, 0);
$fontfamily= __DIR__."/arial.ttf";
imagettftext($logo, 20, 0, 11, 21, $blanco, $fontfamily, 'ALEX');

header('Content-Type: image/png');
imagepng($logo);
imagedestroy($logo);
?>