<div class="veiculos form">
<?php echo $this->Form->create('Veiculo');?>
	<h2><?php __('Add Veiculo'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('tipo_veiculo_id');
		echo $this->Form->input('descricao');
		// echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>