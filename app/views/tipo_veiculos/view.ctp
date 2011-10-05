<div class="tipoVeiculos view">
<h2><?php  __('Tipo Veiculo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoVeiculo['TipoVeiculo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoVeiculo['TipoVeiculo']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Cadastro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoVeiculo['TipoVeiculo']['data_cadastro']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Veiculo', true), array('action' => 'edit', $tipoVeiculo['TipoVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipo Veiculo', true), array('action' => 'delete', $tipoVeiculo['TipoVeiculo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoVeiculo['TipoVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Veiculo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Veiculos');?></h3>
	<?php if (!empty($tipoVeiculo['Veiculo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th><?php __('Data Cadastro'); ?></th>
		<th><?php __('Tipo Veiculo Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoVeiculo['Veiculo'] as $veiculo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $veiculo['id'];?></td>
			<td><?php echo $veiculo['descricao'];?></td>
			<td><?php echo $veiculo['data_cadastro'];?></td>
			<td><?php echo $veiculo['tipo_veiculo_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'veiculos', 'action' => 'view', $veiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'veiculos', 'action' => 'edit', $veiculo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'veiculos', 'action' => 'delete', $veiculo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $veiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculo', true), array('controller' => 'veiculos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
