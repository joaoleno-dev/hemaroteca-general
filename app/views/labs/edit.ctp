<div class="arquivos form">
<?php echo $this->Form->create('Arquivo');?>
	<fieldset>
		<legend><?php __('Edit Arquivo'); ?></legend>
	<?php
		echo $this->Html->image('uploads/'.$this->data['Arquivo']['nome_arquivo']);
		echo $this->Form->input('id');
		echo $this->Form->input('publicacao_id');
		echo $this->Form->input('arquivo_url');
		echo $this->Form->input('data_cadastro');
		echo $this->Form->input('nome_arquivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Arquivo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Arquivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Arquivos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>