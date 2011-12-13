<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('SRMM - Secretaria da Região Metropolitana de Manaus :: Sistema Hemaroteca :: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');
		echo $this->Html->css('forms');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="menu">
			<ul>
				<li><?php echo $this->Html->link(__('Tipo de veiculos',true),$this->Html->url(array('controller' => 'tipo_veiculos'),true));?></li>
				<li><?php echo $this->Html->link(__('Veiculos',true),$this->Html->url(array('controller' => 'veiculos'),true));?></li>
				<li><?php echo $this->Html->link(__('Publicações',true),$this->Html->url(array('controller' => 'publicacaos'),true));?></li>
				<li><?php echo $this->Html->link(__('Arquivos',true),$this->Html->url(array('controller' => 'arquivos'),true));?></li>
				<li><?php echo $this->Html->link(__('Labs',true),$this->Html->url(array('controller' => 'labs'),true));?><small class="small-text">BETA</small></li>
			</ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
				<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>