<div class="arquivos form">
<?php echo $this->Form->create('Arquivo',array('enctype' => 'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Add Arquivo'); ?></legend>
	<?php
		 echo $this->Form->input('arquivo',array('type' => 'file'));
		 echo $this->Form->hidden('Arquivo.id');
		// echo $this->Form->input('data_cadastro');
		// echo $this->Form->input('nome_arquivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Arquivos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>