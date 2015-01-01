<div class="equipos index">
	<h2><?php echo __('Equipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_serie'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_inventario'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_compra'); ?></th>
			<th><?php echo $this->Paginator->sort('garantia'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($equipos as $equipo): ?>
	<tr>
		<td><?php echo h($equipo['Equipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Tipo']['nombre']); ?></td>
		<td><?php echo h($equipo['Marca']['nombre']); ?></td>
		<td><?php echo h($equipo['Equipo']['numero_serie']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['numero_inventario']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['responsable']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['fecha_compra']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['garantia']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['ubicacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipo['Equipo']['id']), array(), __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
