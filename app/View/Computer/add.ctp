<h3>Agragar Computadoras</h3>

<?php
	echo $this->Form->create('Computer');
	echo $this->Form->input('brands', array('label' => 'Marcas'));
	echo $this->Form->input('models', array('label' => 'Modelos'));
	echo $this->Form->input('serie', array('label' => 'No. Serie'));
	echo $this->Form->input('inventory', array('label' => 'No. Inventario'));
	echo $this->Form->end('Guardar la captura');
?>