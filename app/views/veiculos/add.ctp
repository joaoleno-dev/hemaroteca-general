<div class="veiculos form">
<?php echo $this->Form->create('Veiculo');?>
	<fieldset>
		<legend><?php __('Add Veiculo'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Veiculos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('controller' => 'tipo_veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Veiculo', true), array('controller' => 'tipo_veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>