<?php echo $this->Html->script('jquery-1.6.4'); ?>
<div class="publicacaos form">
<?php echo $this->Form->create('Publicacao',array('enctype' => 'multipart/form-data'));?>
	<fieldset>
		<legend><?php __('Add Publicacao'); ?></legend>
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
	<?php echo $this->Form->input('arquivo_url',array('name' => 'arquivos[]','type' => 'file','div' => 'fileinput')); ?>
	<span id="file-adder">
		<em style="cursor:pointer">Adicionar novo</em>
	</span>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tipos de veículos', true), array('controller' => 'tipo_veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Veículos', true), array('controller' => 'veiculos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Publicações', true), array('controller' => 'publicacaos','action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Arquivos', true), array('controller' => 'arquivos','action' => 'index'));?></li>
	</ul>
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