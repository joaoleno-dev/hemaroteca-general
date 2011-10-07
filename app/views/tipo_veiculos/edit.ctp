<div class="tipoVeiculos form">
<?php echo $this->Form->create('TipoVeiculo');?>
	<h2><?php __('Edit Tipo Veiculo'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao',array('label' => 'Descrição'));
		//echo $this->Form->input('data_cadastro');
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
					echo $this->Html->link('Cancelar', $this->Html->url(array('controller' => 'tipo_veiculos', 'action' => 'index'),true));
				?>
		</div>
	</div>
</div>