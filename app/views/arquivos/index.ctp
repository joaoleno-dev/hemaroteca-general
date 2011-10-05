<div class="arquivos index">
	<h2><?php __('Arquivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('publicacao_id');?></th>
			<th><?php echo $this->Paginator->sort('arquivo_url');?></th>
			<th><?php echo $this->Paginator->sort('data_cadastro');?></th>
			<th><?php echo $this->Paginator->sort('nome_arquivo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($arquivos as $arquivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $arquivo['Arquivo']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arquivo['Publicacao']['id'], array('controller' => 'publicacaos', 'action' => 'view', $arquivo['Publicacao']['id'])); ?>
		</td>
		<td><?php echo $arquivo['Arquivo']['arquivo_url']; ?>&nbsp;</td>
		<td><?php echo $arquivo['Arquivo']['data_cadastro']; ?>&nbsp;</td>
		<td><?php echo $arquivo['Arquivo']['nome_arquivo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $arquivo['Arquivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $arquivo['Arquivo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $arquivo['Arquivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $arquivo['Arquivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Arquivo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>