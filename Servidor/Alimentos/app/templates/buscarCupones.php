<?php ob_start() ?>
<?php if (count($params['resultado'])>0): ?>
<table>
    <tr>
        <th>Comercio</th>
        <th>Valor</th>
    </tr>

    <?php foreach ($params['resultado'] as $cupones) : ?>
    <tr>
        <td><?= $cupones['comercio'] ?></td>
        <td><?= $cupones['valor'] ?> €</td>
    </tr>
    <?php endforeach ?>
</table>
<?php endif ?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
