<?php echo $this->Html->script('jquery-1.6.4'); ?>
<div class="publicacaos form">
<?php echo $this->Form->create('Publicacao',array('enctype' => 'multipart/form-data'));?>
	<h2><?php __('Nova Publicacao'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('tipo_veiculo_id',array('label' => 'Tipo de veiculo'));
		echo $this->Form->input('veiculo_id',array('label' => 'Veiculo de comunicação'));
		echo $this->Form->input('titulo',array('label' => 'Título'));
		echo $this->Form->input('data_publicacao',array('label' => 'Data da publicação'));
		// echo $this->Form->input('data_cadastro');
		echo $this->Form->input('informacao',array('label' => 'Informação'));
		echo $this->Form->input('resumo',array('label' => 'Resumo'));
		echo $this->Form->input('palavra_chave',array('type' => 'text','label' => 'Palavras-chaves <small>Separe por virgulas</small>'));
		echo $this->Form->input('avaliacao',array('type' => 'radio','options' => array('Negativa','Positiva')));
	?>
	</fieldset>
	<fieldset id="files-div">
	<fieldset>
		<legend>Upload de arquivos</legend>
		<?php echo $this->Form->input('arquivo_url',array('name' => 'arquivos[]','type' => 'file','div' => 'fileinput')); ?>
		<span id="file-adder">
			<em style="cursor:pointer">Adicionar novo</em>
		</span>
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
					echo $this->Html->link('Cancelar', $this->Html->url(array('controller' => 'publicacaos', 'action' => 'index'),true));
				?>
				</div>
	</div><!-- div class="submit"> -->
</div>
<script>
	$(document).ready(function(){
		$('#PublicacaoVeiculoId').load('<?php echo $this->Html->url(array('controller'=> 'publicacaos','action' => 'load_veiculos')); ?>/' + $('#PublicacaoTipoVeiculoId').val());
		$('#PublicacaoTipoVeiculoId').change(function(response){
			$('#PublicacaoVeiculoId').load('<?php echo $this->Html->url(array('controller'=> 'publicacaos','action' => 'load_veiculos')); ?>/' + $('#PublicacaoTipoVeiculoId').val());
		});
		$('#file-adder').click(function(){
			$('.fileinput').append('<?php echo $this->Form->input('arquivo_url',array('name' => 'arquivos[]','type' => 'file')); ?>');
		});
	});
</script>