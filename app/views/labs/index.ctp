<div class="arquivos index">
	<h2><?php __('Arquivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('arquivo_url');?></th>
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
		<td><?php echo $arquivo['Arquivo']['arquivo_url']; ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('Novo Arquivo', true), array('controller' => 'arquivos','action' => 'add'));?></li>
		<li><?php echo $this->Html->link(__('Tipos de veiculos', true), array('controller' => 'tipo_veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Veiculos', true), array('controller' => 'veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Publicações', true), array('controller' => 'publicacaos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Arquivos', true), array('controller' => 'arquivos','action' => 'index'));?></li>
	</ul>
</div>