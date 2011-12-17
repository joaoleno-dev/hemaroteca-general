<div class="veiculos index">
	<h2><?php __('Veículos');?></h2>
	<a class="button green" href="<?php echo $this->Html->url(array('controller' => 'veiculos','action' => 'add')); ?>">Novo Veiculo</a>
	<?php echo $this->Form->create('Veiculo',array('class' => 'pesquisa')); ?>
	<fieldset>
		<?php echo $this->Form->input('tipo_veiculo_id',array('label' => 'Tipo de veículo','empty' => true)); 	?>
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
			<th style="width: 14%;"><?php echo $this->Paginator->sort('Tipo de veículo','tipo_veiculo_id');?></th>
			<th style="width: 72%;"><?php echo $this->Paginator->sort('Descrição','descricao');?></th>
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
		<td align="center"><?php echo $veiculo['TipoVeiculo']['descricao']; ?></td>
		<td><?php echo $veiculo['Veiculo']['descricao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('search.png',array('alt' => 'Visualizar')), array('action' => 'view', $veiculo['Veiculo']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('pencil.png',array('alt' => 'Alterar')), array('action' => 'edit', $veiculo['Veiculo']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('delete.png',array('alt' => 'Deletar')), array('action' => 'delete', $veiculo['Veiculo']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $veiculo['Veiculo']['id'])); ?>
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