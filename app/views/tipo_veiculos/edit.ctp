<div class="tipoVeiculos form">
<?php echo $this->Form->create('TipoVeiculo');?>
	<h2><?php __('Edit Tipo Veiculo'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		//echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>