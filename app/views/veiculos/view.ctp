<div class="veiculos view">
<h2><?php  __('Veiculo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $veiculo['Veiculo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $veiculo['Veiculo']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Cadastro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $veiculo['Veiculo']['data_cadastro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Veiculo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($veiculo['TipoVeiculo']['descricao'], array('controller' => 'tipo_veiculos', 'action' => 'view', $veiculo['TipoVeiculo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Veiculo', true), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Veiculo', true), array('action' => 'delete', $veiculo['Veiculo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Veiculos', true), array('controller' => 'tipo_veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Veiculo', true), array('controller' => 'tipo_veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicacaos', true), array('controller' => 'publicacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Publicacaos');?></h3>
	<?php if (!empty($veiculo['Publicacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Veiculo Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Data Publicacao'); ?></th>
		<th><?php __('Data Cadastro'); ?></th>
		<th><?php __('Informacao'); ?></th>
		<th><?php __('Resumo'); ?></th>
		<th><?php __('Avaliacao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($veiculo['Publicacao'] as $publicacao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $publicacao['id'];?></td>
			<td><?php echo $publicacao['veiculo_id'];?></td>
			<td><?php echo $publicacao['titulo'];?></td>
			<td><?php echo $publicacao['data_publicacao'];?></td>
			<td><?php echo $publicacao['data_cadastro'];?></td>
			<td><?php echo $publicacao['informacao'];?></td>
			<td><?php echo $publicacao['resumo'];?></td>
			<td><?php echo $publicacao['avaliacao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'publicacaos', 'action' => 'view', $publicacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'publicacaos', 'action' => 'edit', $publicacao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'publicacaos', 'action' => 'delete', $publicacao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publicacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Publicacao', true), array('controller' => 'publicacaos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
