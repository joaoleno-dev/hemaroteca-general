<div class="tipoVeiculos index">
	<h2><?php __('Tipo Veiculos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('data_cadastro');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipoVeiculos as $tipoVeiculo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoVeiculo['TipoVeiculo']['id']; ?>&nbsp;</td>
		<td><?php echo $tipoVeiculo['TipoVeiculo']['descricao']; ?>&nbsp;</td>
		<td><?php echo $tipoVeiculo['TipoVeiculo']['data_cadastro']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tipoVeiculo['TipoVeiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tipoVeiculo['TipoVeiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tipoVeiculo['TipoVeiculo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoVeiculo['TipoVeiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipo Veiculo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>