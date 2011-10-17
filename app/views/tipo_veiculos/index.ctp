<?php //phpinfo(); ?>
<div class="tipoVeiculos index">
	<h2><?php __('Tipo de Veiculos');?></h2>
	<a class="button green" href="<?php echo $this->Html->url(array('controller' => 'tipo_veiculos','action' => 'add')); ?>">Novo Tipo de Veiculo</a>
	<?php echo $this->Form->create('TipoVeiculo',array('class' => 'pesquisa')); ?>
	<fieldset>
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
			<!-- <th><?php echo $this->Paginator->sort('id');?></th> -->
			<th style="width: 86%"><?php echo $this->Paginator->sort('Descrição','descricao');?></th>
			<th class="actions"><?php __('Ações');?></th>
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
		<!-- <td><?php echo $tipoVeiculo['TipoVeiculo']['id']; ?>&nbsp;</td> -->
		<td><?php echo $tipoVeiculo['TipoVeiculo']['descricao']; ?>&nbsp;</td>
		<!-- <td><?php echo $tipoVeiculo['TipoVeiculo']['data_cadastro']; ?>&nbsp;</td> -->
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
