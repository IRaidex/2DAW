<?php ob_start() ?>
<?php if (count($params['resultado'])>0): ?>
	<table>
		<tr>
			<th>ID</th>
			<th>Codigo</th>
			<th>Valor</th>
			<th>Comercio</th>
		</tr>

		<?php foreach ($params['resultado'] as $cupones) : ?>
		<tr>
			<td><?= $cupones['id'] ?></td>
			<td><?= $cupones['codigo'] ?></td>
			<td><?= $cupones['valor'] ?></td>
			<td><?= $cupones['comercio'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php endif ?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
