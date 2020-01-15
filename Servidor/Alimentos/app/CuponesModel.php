<?php
class CuponesModel {
    protected $conexion;

    public function __construct($dbname, $dbuser, $dbpass, $dbhost){

        $opc = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
        try {
            $mvc_bd_conexion = new PDO('mysql:host='. $dbhost .';dbname='.$dbname, $dbuser, $dbpass, $opc);

            $this->conexion = $mvc_bd_conexion;
        } catch (PDOException $e) {
            $error = 'Falló la conexión: ' . $e->getMessage();
            die('No ha sido posible realizar la conexión con la base de datos: ');
        }
    }

    private function dameCuponesDB($sql){
        $result = $this->conexion->query($sql);

        $cupones = [];

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $cupones[] = $row;
        }

        return $cupones;
    }

    public function dameCupones(){
        $sql = 'SELECT * FROM cupones ORDER BY id DESC;';
        return $this->dameCuponesDB($sql);
    }

}
?>