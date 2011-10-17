<?php
class TipoVeiculosController extends AppController {

	var $name = 'TipoVeiculos';

	function index() {
		$this->TipoVeiculo->recursive = 0;
		$result = '';
		if(isset($this->data) && !empty($this->data)) {
			if(isset($this->data['TipoVeiculo']['descricao']) && !empty($this->data['TipoVeiculo']['descricao'])) {
				$filtro = 'TipoVeiculo.descricao LIKE "%'.$this->data['TipoVeiculo']['descricao'].'%"';
				$this->paginate = array(
					'limit' => 15,
					'order' => array('TipoVeiculo.descricao' => 'asc'),
					'conditions' => array($filtro)
				);
			}
			$result = $this->paginate();
		} else {
			$result =  $this->paginate();
		}
		$this->set('tipoVeiculos',$result); 
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipo veiculo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoVeiculo', $this->TipoVeiculo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			//print_r($this->data);exit;
			$this->TipoVeiculo->create();
			if ($this->TipoVeiculo->save($this->data)) {
				$this->Session->setFlash(__('The tipo veiculo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo veiculo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
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
			$this->data = $this->TipoVeiculo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipo veiculo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoVeiculo->delete($id)) {
			$this->Session->setFlash(__('Tipo veiculo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo veiculo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
