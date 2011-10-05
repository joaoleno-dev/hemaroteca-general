<div class="publicacaos form">
<?php echo $this->Form->create('Publicacao');?>
	<fieldset>
		<legend><?php __('Add Publicacao'); ?></legend>
	<?php
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('data_publicacao');
		// echo $this->Form->input('data_cadastro');
		echo $this->Form->input('informacao');
		echo $this->Form->input('resumo');
		echo $this->Form->input('avaliacao',array('type' => 'radio','options' => array('Negativa','Positiva')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arquivos', true), array('controller' => 'arquivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arquivo', true), array('controller' => 'arquivos', 'action' => 'add')); ?> </li>
	</ul>
</div>