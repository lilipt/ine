<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Instituto Nacional Electoral');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo"><?php echo $this->Html->image('logo.gif') ?>
				<p>Control de Inventario de Hardware Unidad de Servicios de Informática<br />
				Dirección de Operaciones Subdirección de Soporte de Operaciones de Activos Informáticos<br />
				<strong>Departamento de Soporte</strong></p>

			</div>
			<nav>
				<ul>
					<li><?php echo $this->Html->Link(__("Home"), array("controller"=>"pages", "action"=>"home")); ?></li>
					<li><?php echo $this->Html->Link(__("Hardware"), array("controller"=>"equipos", "action"=>"index")); ?></li>
					<li><?php echo $this->Html->Link(__("Trands"), array("controller"=>"marcas", "action"=>"index")); ?></li>
					<li><?php echo $this->Html->Link(__("Types"), array("controller"=>"tipos", "action"=>"index")); ?></li>
					<li><?php echo $this->Html->Link(__("Reports"), array("controller"=>"reports", "action"=>"index")); ?></li>
				</ul>
			</nav>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
