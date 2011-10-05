<div class="tipoVeiculos form">
<?php echo $this->Form->create('TipoVeiculo');?>
	<fieldset>
		<legend><?php __('Add Tipo Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		//echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>