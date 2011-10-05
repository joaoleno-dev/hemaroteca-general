<div class="arquivos view">
<h2><?php  __('Arquivo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arquivo['Arquivo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publicacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($arquivo['Publicacao']['id'], array('controller' => 'publicacaos', 'action' => 'view', $arquivo['Publicacao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Arquivo Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arquivo['Arquivo']['arquivo_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Cadastro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arquivo['Arquivo']['data_cadastro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome Arquivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $arquivo['Arquivo']['nome_arquivo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arquivo', true), array('action' => 'edit', $arquivo['Arquivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Arquivo', true), array('action' => 'delete', $arquivo['Arquivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $arquivo['Arquivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Arquivos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arquivo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
