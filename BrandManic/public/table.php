<table class="table table-sm table-bordered" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Pais</th>
            <th>Audiencia Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($data as $key => $valor ): ?>

            <td>
                <?= $valor ?>
            </td>








            <?php endforeach ?>
        </tr>
    </tbody>
</table>    

<!-- <td>
<button class="btn btn-primary btn-xs" onClick="verCard('XXXXXXX');">Ver</button>
</td>-->