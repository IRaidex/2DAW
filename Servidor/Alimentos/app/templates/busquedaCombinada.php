<?php ob_start() ?>
<form name="busquedaEnergia" action="buscarAlimentosCombinada" method="post">
	<label for="nombre">Nombre del alimento:</label>
	<input type="text" name="nombre" id="nombre" value="<?= $params['nombre'] ?>">
	<span>(puedes utilizar '%' como comodin)</span>
	
	<label for="energia">Energia del alimento:</label>
	<input type="text" name="energia" id="energia" value="<?= $params['energia'] ?>">
	<span>(puedes utilizar '%' como comodin)</span>

	<input type="submit" value="buscar">
</form>

<?php if (count($params['resultado'])>0): ?>
	<table>
		<tr>
			<th>alimento (por 100g)</th>
			<th>energia (Kcal)</th>
		</tr>

		<?php foreach ($params['resultado'] as $alimento) : ?>
		<tr>
			<td><a href="index.php?ctl=ver&id=<?= $alimento['id'] ?>"><?= $alimento['nombre'] ?></a></td>
			<td><?= $alimento['energia'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php endif ?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
