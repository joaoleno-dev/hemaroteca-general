<div class="publicacaos index">
	<h2><?php __('Publicacaos');?></h2>
	<a class="button green" href="<?php echo $this->Html->url(array('controller' => 'publicacaos','action' => 'add')); ?>">Nova Publicação</a>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('veiculo_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('data_publicacao');?></th>
			<th><?php echo $this->Paginator->sort('avaliacao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($publicacaos as $publicacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($publicacao['Veiculo']['descricao'], array('controller' => 'veiculos', 'action' => 'view', $publicacao['Veiculo']['id'])); ?>
		</td>
		<td><?php echo $publicacao['Publicacao']['titulo']; ?>&nbsp;</td>
		<td><?php echo $publicacao['Publicacao']['data_publicacao']; ?>&nbsp;</td>
		<td><?php echo $publicacao['Publicacao']['avaliacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $publicacao['Publicacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $publicacao['Publicacao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $publicacao['Publicacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publicacao['Publicacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Publicação', true), array('controller' => 'publicacaos','action' => 'add'));?></li>
		<li><?php echo $this->Html->link(__('Tipos de veiculos', true), array('controller' => 'tipo_veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Veiculos', true), array('controller' => 'veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Publicações', true), array('controller' => 'publicacaos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Arquivos', true), array('controller' => 'arquivos','action' => 'index'));?></li>
	</ul>
</div>