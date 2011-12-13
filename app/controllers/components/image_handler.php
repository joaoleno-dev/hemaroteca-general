<?php 
class ImageHandlerComponent extends Object {
	/**
	 *  Função que extrai os metadados da imagem especifica.
	 *  @author Joao Leno
	 *  @param string $img_path Caminho da imagem.
	 *  @return array Array com os metadados da imagem.
	 * */
	function getImageMetaInfo($img_path = null) {
		$meta_data_obj = array();
		if(isset($img_path)) {
			$meta_data = getimagesize($img_path);
			
			$meta_data_obj['width'] = $meta_data[0];
			$meta_data_obj['height'] = $meta_data[1];
			$meta_data_obj['type'] = $meta_data[2];
			$meta_data_obj['bits'] = $meta_data['bits'];
			$meta_data_obj['mime'] = $meta_data['mime'];
			
		}
		return $meta_data_obj;
	}
	
	/**
	 *  Função que executa o redimensionamento da imagem e retorna o caminho do thumbnail.
	 *  @author Joao Leno
	 *  @param array $img_file Array com a estrutura de imagem
	 *  @return string com o caminho da imagem.
	 **/
	function resizeImage() {
		
	}
}
?>