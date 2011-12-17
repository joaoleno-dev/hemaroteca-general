<?php //phpinfo(); ?>
<div class="tipoVeiculos index">
	<h2><?php __('Tipo de Veículos');?></h2>
	<a class="button green" href="<?php echo $this->Html->url(array('controller' => 'tipo_veiculos','action' => 'add')); ?>">Novo Tipo de Veículo</a>
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
			<th style="width: 87%"><?php echo $this->Paginator->sort('Descrição','descricao');?></th>
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
			<?php echo $this->Html->link($this->Html->image('search.png',array('alt' => 'View')), array('action' => 'view', $tipoVeiculo['TipoVeiculo']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('pencil.png',array('alt' => 'Alterar')), array('action' => 'edit', $tipoVeiculo['TipoVeiculo']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('delete.png',array('alt' => 'Deletar')), array('action' => 'delete', $tipoVeiculo['TipoVeiculo']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $tipoVeiculo['TipoVeiculo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="table-info">
	<?php
		echo $this->Paginator->counter(array(
		'format' => __('Exibindo %current% de %count% registros', true)
		));
	?>	
	</div>
	<div class="paging">
		<?php echo $this->Paginator->prev($this->Html->image('back.png',array('alt' => 'Página anterior','title' => 'Página anterior')), array('escape' => false), null, array('class'=>'disabled','escape' => false));?>
	 	<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next($this->Html->image('next.png',array('alt' => 'Página seguinte','title' => 'Página seguinte')), array('escape' => false), null, array('class' => 'disabled','escape' => false));?>
	</div>
</div>
