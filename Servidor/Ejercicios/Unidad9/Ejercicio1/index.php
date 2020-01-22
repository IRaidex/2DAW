<?php 

include_once'personas.inc.php';
header('Content-type: text/xml');

for($i = 0 ; $i<count($personas) ; $i++);



?>
<?xml version="1.0"?>
<lista>
    <?php foreach($personas as $persona) : ?>
    <persona>  
        <?php foreach($persona as $informacion => $contenido) : ?>
        <<?= $informacion ?>><?= $contenido ?> </<?= $informacion ?>>  
        <?php endforeach ?>
    </persona>
    <?php endforeach ?>
</lista>

