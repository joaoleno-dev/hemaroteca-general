<div class="veiculos form">
<?php echo $this->Form->create('Veiculo');?>
	<h2><?php __('Alterar Veículo'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_veiculo_id',array('label' => 'Tipo de veículo'));
		echo $this->Form->input('descricao',array('label' => 'Descrição'));
		// echo $this->Form->input('data_cadastro');
	?>
	</fieldset>
	<div class="submit">
			<?php 
				echo $this->Form->end(array(
					'label' => 'Salvar alterações',
					'class' => 'button blue',
					'div' => false
				));
			?>
			<div class="cancel">
						ou
					<?php
						echo $this->Html->link('Cancelar', $this->Html->url(array('controller' => 'veiculos', 'action' => 'index'),true));
					?>
			</div>
	</div>
</div>