<?php
class LabsController extends AppController {

	var $name = 'Labs';
	var $components = array('ImageHandler');
	
	function index() {
		$this->loadModel('Arquivo');
		$this->Arquivo->recursive = 0;
		$this->set('arquivos', $this->paginate('Arquivo'));
	}
	
	function link() {
		if(isset($this->data)) {
			
		} else {
			$this->loadModel('Arquivo');
			$this->Arquivo->recursive = -1;
			$arquivos = $this->Arquivo->find('all',array(
				'conditions' => array(
					'Arquivo.publicacao_id' => null
				),
				'order' => array(
					'Arquivo.id ASC'
				)
			));
			foreach($arquivos as &$arquivo) {
				$arquivo['Arquivo']['meta-data'] = $this->ImageHandler->getImageMetaInfo($arquivo['Arquivo']['arquivo_url']);
			}
			echo '<pre>';
			print_r($arquivos);
			echo '</pre>';exit;
			$this->set('arquivos',$arquivos);
		}
	}
	
	function add() {
		
	}
	
	function edit($arquivo_id = null) {
		$this->loadModel('Arquivo');
		if (!$arquivo_id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipo veiculo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoVeiculo->save($this->data)) {
				$this->Session->setFlash(__('The tipo veiculo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo veiculo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Arquivo->read(null, $arquivo_id);
		}
	}
	
}
?>