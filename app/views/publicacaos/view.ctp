<div class="publicacaos view">
<h2><?php  __('Publicacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Veiculo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($publicacao['Veiculo']['descricao'], array('controller' => 'veiculos', 'action' => 'view', $publicacao['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Publicacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['data_publicacao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Cadastro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['data_cadastro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Informacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['informacao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Resumo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['resumo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avaliacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publicacao['Publicacao']['avaliacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publicacao', true), array('action' => 'edit', $publicacao['Publicacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Publicacao', true), array('action' => 'delete', $publicacao['Publicacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publicacao['Publicacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arquivos', true), array('controller' => 'arquivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arquivo', true), array('controller' => 'arquivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Arquivos');?></h3>
	<?php if (!empty($publicacao['Arquivo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Publicacao Id'); ?></th>
		<th><?php __('Arquivo Url'); ?></th>
		<th><?php __('Data Cadastro'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacao['Arquivo'] as $arquivo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $arquivo['id'];?></td>
			<td><?php echo $arquivo['publicacao_id'];?></td>
			<td><?php echo $arquivo['arquivo_url'];?></td>
			<td><?php echo $arquivo['data_cadastro'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'arquivos', 'action' => 'view', $arquivo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'arquivos', 'action' => 'edit', $arquivo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'arquivos', 'action' => 'delete', $arquivo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $arquivo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Arquivo', true), array('controller' => 'arquivos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
