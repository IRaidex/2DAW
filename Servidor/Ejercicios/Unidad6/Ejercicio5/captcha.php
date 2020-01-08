<?php
session_start();
$imagen = imagecreatetruecolor(200, 90);
$num = rand(0,1);
if($num == 0){
    $fondo = imagecolorallocate($imagen, 0,0,0);
}else{
    $fondo = imagecolorallocate($imagen, 184, 184, 184);
}
imagefill($imagen, 0 ,0 , $fondo);
$color = imagecolorallocate($imagen, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
$fontFamily = __DIR__ . '/arial.ttf';
imagettftext($imagen, mt_rand(15,40), mt_rand(-16,16),mt_rand(20,80),50, $color, $fontFamily, generarCodigoCaptchar());
header('Content-Type: imagen/png');
imagepng($imagen);
imagedestroy($imagen);  

function generarCodigoCaptchar(){

    $res="";
    $valores="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/.+-";
    
    for($i=0; $i<5; $i++){
        $res.=$valores{mt_rand(0,66)};
    }
    $_SESSION['captchar'] = $res;
    return $res;
}

?>