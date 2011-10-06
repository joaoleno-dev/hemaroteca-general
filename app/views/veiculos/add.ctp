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
	<div class="submit">
			<?php 
				echo $this->Form->end(array(
					'label' => 'Salvar',
					'class' => 'button blue',
					'div' => false
				));
			?>
			<div class="cancel">
				ou
			<?php
				echo $this->Html->link('Cancelar', $this->Html->url(array('controller' => 'veiculos', 'action' => 'index')));
			?>
			</div>
	</div>
</div>