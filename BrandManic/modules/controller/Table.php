<?php

namespace controller;

use controller\Printer;

class Table {

  public static function prepareDataToTable($id){
   $data=[];
      
      if (!empty($id)){

        //sacar los datos para renderizar
        $data=$_SESSION['ICdata'];
          
        

        
      }
      
      return $data[$id];

  }

  
}
