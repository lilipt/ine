<div class="marcas view">
<h2><?php echo __('Marca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Marca'), array('action' => 'edit', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Marca'), array('action' => 'delete', $marca['Marca']['id']), array(), __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipos'); ?></h3>
	<?php if (!empty($marca['Equipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Numero Serie'); ?></th>
		<th><?php echo __('Numero Inventario'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Responsable'); ?></th>
		<th><?php echo __('Fecha Compra'); ?></th>
		<th><?php echo __('Garantia'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($marca['Equipo'] as $equipo): ?>
		<tr>
			<td><?php echo $equipo['id']; ?></td>
			<td><?php echo $equipo['tipo_id']; ?></td>
			<td><?php echo $equipo['marca_id']; ?></td>
			<td><?php echo $equipo['numero_serie']; ?></td>
			<td><?php echo $equipo['numero_inventario']; ?></td>
			<td><?php echo $equipo['modelo']; ?></td>
			<td><?php echo $equipo['responsable']; ?></td>
			<td><?php echo $equipo['fecha_compra']; ?></td>
			<td><?php echo $equipo['garantia']; ?></td>
			<td><?php echo $equipo['ubicacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipos', 'action' => 'view', $equipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipos', 'action' => 'edit', $equipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipos', 'action' => 'delete', $equipo['id']), array(), __('Are you sure you want to delete # %s?', $equipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
