<?php

namespace controller;



class Printer {

    public static function renderSelect($data){
        include 'select.php';

    }

    public static function renderTable($data){
        include 'table.php';



    }

    public static function renderCard($data){
        //include 'select.php';

    }
}