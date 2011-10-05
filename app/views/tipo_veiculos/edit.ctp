<div class="tipoVeiculos form">
<?php echo $this->Form->create('TipoVeiculo');?>
	<fieldset>
		<legend><?php __('Edit Tipo Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		//echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TipoVeiculo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TipoVeiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>