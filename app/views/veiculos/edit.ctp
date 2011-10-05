<div class="veiculos form">
<?php echo $this->Form->create('Veiculo');?>
	<fieldset>
		<legend><?php __('Edit Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_veiculo_id');
		echo $this->Form->input('descricao');
		// echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Veiculo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Veiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('controller' => 'tipo_veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Veiculo', true), array('controller' => 'tipo_veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>