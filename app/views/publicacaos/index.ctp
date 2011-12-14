<div class="publicacaos index">
	<h2><?php __('Publicações');?></h2>
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
		<td><?php echo $publicacao['Veiculo']['descricao']; ?></td>
		<td><?php echo $publicacao['Publicacao']['titulo']; ?>&nbsp;</td>
		<td><?php echo $publicacao['Publicacao']['data_publicacao']; ?>&nbsp;</td>
		<td><?php echo $publicacao['Publicacao']['avaliacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('search.png',array('alt' => 'Visualizar')), array('action' => 'view', $publicacao['Publicacao']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('pencil.png',array('alt' => 'Alterar')), array('action' => 'edit', $publicacao['Publicacao']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('delete.png',array('alt' => 'Deletar')), array('action' => 'delete', $publicacao['Publicacao']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $publicacao['Publicacao']['id'])); ?>
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