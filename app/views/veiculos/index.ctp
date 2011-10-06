<div class="veiculos index">
	<h2><?php __('Veiculos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th style="width: 72%;"><?php echo $this->Paginator->sort('descricao');?></th>
			<th style="width: 14%;"><?php echo $this->Paginator->sort('tipo_veiculo_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($veiculos as $veiculo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $veiculo['Veiculo']['descricao']; ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link($veiculo['TipoVeiculo']['descricao'], array('controller' => 'tipo_veiculos', 'action' => 'view', $veiculo['TipoVeiculo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $veiculo['Veiculo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $veiculo['Veiculo']['id'])); ?>
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