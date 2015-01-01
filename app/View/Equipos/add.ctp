<div class="equipos form">
<?php echo $this->Form->create('Equipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Equipo'); ?></legend>
	<?php
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('marca_id');
		echo $this->Form->input('numero_serie');
		echo $this->Form->input('numero_inventario');
		echo $this->Form->input('modelo');
		echo $this->Form->input('responsable');
		echo $this->Form->input('fecha_compra');
		echo $this->Form->input('garantia');
		echo $this->Form->input('ubicacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
