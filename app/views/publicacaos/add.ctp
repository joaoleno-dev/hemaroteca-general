<?php echo $this->Html->script('jquery-1.6.4'); ?>
<div class="publicacaos form">
<?php echo $this->Form->create('Publicacao',array('enctype' => 'multipart/form-data'));?>
	<h2><?php __('Nova Publicacao'); ?></h2>
	<fieldset>
	<?php
		echo $this->Form->input('tipo_veiculo_id');
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('data_publicacao');
		// echo $this->Form->input('data_cadastro');
		echo $this->Form->input('informacao');
		echo $this->Form->input('resumo');
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
<?php echo $this->Form->end(__('Submit', true));?>
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