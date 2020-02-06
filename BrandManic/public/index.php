<?php
require_once '../vendor/autoload.php';

use controller\Card;
use controller\Printer;
use controller\Table;


session_start();

if (isset($_POST['idtotable'])) {
    $data=Table::prepareDataToTable($_POST['idtotable']);
//    var_dump($data);
    Printer::renderTable($data);
}elseif (isset($_POST['idtocard'])){
    Printer::renderCard(Card::prepareDataToCard($_POST['idtocard']));
}else{
    
    $url="https://docs.google.com/spreadsheets/d/e/2PACX-1vR11Po4b2RVVNFZyMmaNX6WcoMWYcyL2N0m3ym6R2Fopu6J96vLeEVLglniHM1-sDOHXod4rnX1U3S9/pub?gid=1009336130&single=true&output=csv";
    $datatoprint=Card::loadData($url);

    Printer::renderSelect($datatoprint['data']);
}
