<div class="equipos view">
<h2><?php echo __('Equipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipo['Tipo']['id'], array('controller' => 'tipos', 'action' => 'view', $equipo['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipo['Marca']['id'], array('controller' => 'marcas', 'action' => 'view', $equipo['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Serie'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['numero_serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Inventario'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['numero_inventario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Compra'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['fecha_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Garantia'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['garantia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['ubicacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipo'), array('action' => 'edit', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipo'), array('action' => 'delete', $equipo['Equipo']['id']), array(), __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
