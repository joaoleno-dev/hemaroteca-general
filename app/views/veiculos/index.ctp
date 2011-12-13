<div class="veiculos index">
	<h2><?php __('Veiculos');?></h2>
	<a class="button green" href="<?php echo $this->Html->url(array('controller' => 'veiculos','action' => 'add')); ?>">Novo Veiculo</a>
	<?php echo $this->Form->create('Veiculo',array('class' => 'pesquisa')); ?>
	<fieldset>
		<?php echo $this->Form->input('tipo_veiculo_id',array('label' => 'Tipo de veiculo','empty' => true)); 	?>
		<?php echo $this->Form->input('descricao',array('label' => 'Descrição')); 	?>
		<?php 
			echo $this->Form->end(array(
				'label' => 'Pesquisar',
				'class' => 'button blue',
				'div' => false
			));
		?>
	</fieldset>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th style="width: 72%;"><?php echo $this->Paginator->sort('Descrição','descricao');?></th>
			<th style="width: 14%;"><?php echo $this->Paginator->sort('Tipo de veiculo','tipo_veiculo_id');?></th>
			<th class="actions"><?php __('Ações');?></th>
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
			<?php echo $veiculo['TipoVeiculo']['descricao']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link($this->Html->image('pencil.png'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link($this->Html->image('delete.png'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $veiculo['Veiculo']['id'])); ?>
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