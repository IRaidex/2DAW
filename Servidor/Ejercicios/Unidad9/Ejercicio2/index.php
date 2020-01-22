<?php 

include_once'personas.inc.php';
header('Content-type: text/json');

?>


{
    "persona": [
    <?php foreach($personas as $persona) : ?>
       { <?php foreach($persona as $informacion => $contenido) : ?>
            "<?= $informacion ?>": "<?= $contenido ?>",
        <?php endforeach ?>},
    <?php endforeach ?>

    ]
}
 <?= json_encode($personas, JSON_PRETTY_PRINT) ?>
