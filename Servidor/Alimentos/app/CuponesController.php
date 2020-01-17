<?php
// app/Controller.php
class CuponesController
{

    public function buscarCupones() {
        $m = new CuponesModel(Config::$mvc_bd_nombre,
                       Config::$mvc_bd_usuario,
                       Config::$mvc_bd_clave,
                       Config::$mvc_bd_hostname);
        $params = ['resultado' => $m->dameCupones()];
        require __DIR__ . '/templates/buscarCupones.php';
    }


}
