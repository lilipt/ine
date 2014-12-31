<h3>Listado de Equipos registrado</h3>
<table>
	<tr>
		<th>id</th>
		<th>Marcas</th>
		<th>Modelos</th>
		<th>No. Serie</th>
		<th>No. Inventario</th>
	</tr>
	<?php foreach($computadoras as $k=>$computadoras):?>
	<tr>
		<td><?php echo $computadoras['Computer']['id'];?></td>
		<td><?php echo $computadoras['Computer']['brands'];?></td>
		<td><?php echo $computadoras['Computer']['models'];?></td>
		<td><?php echo $computadoras['Computer']['serie'];?>e</td>
		<td><?php echo $computadoras['Computer']['inventory'];?></td>
	</tr>
<?php endforeach;?>
</table>