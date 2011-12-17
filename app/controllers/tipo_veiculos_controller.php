<?php
class TipoVeiculosController extends AppController {

	var $name = 'TipoVeiculos';

	var $paginate = array('limit' => 10);

	function index() {
		$this->TipoVeiculo->recursive = 0;
		$result = '';
		if(isset($this->data) && !empty($this->data)) {
			if(isset($this->data['TipoVeiculo']['descricao']) && !empty($this->data['TipoVeiculo']['descricao'])) {
				$filtro = 'TipoVeiculo.descricao LIKE "%'.$this->data['TipoVeiculo']['descricao'].'%"';
				$this->paginate = array(
					'limit' => 2,
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
			$this->Session->setFlash(__('Tipo de veículo inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoVeiculo', $this->TipoVeiculo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			//print_r($this->data);exit;
			$this->TipoVeiculo->create();
			if ($this->TipoVeiculo->save($this->data)) {
				$this->Session->setFlash(__('Novo tipo de veículo salvo com sucesso.', true),'flash_good');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo de veículo não pode ser salvo. Por favor, tente novamente.', true),'flash_bad');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tipo de veículo inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TipoVeiculo->save($this->data)) {
				$this->Session->setFlash(__('Novo tipo de veículo salvo com sucesso.', true),'flash_good');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo de veículo não pode ser salvo. Por favor, tente novamente.', true),'flash_bad');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoVeiculo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Chave deste tipo de veículo inválida.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoVeiculo->delete($id)) {
			$this->Session->setFlash(__('Tipo de veículo deletado.', true),'flash_good');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo de veículo NÃO pode ser deletado.', true),'flash_bad');
		$this->redirect(array('action' => 'index'));
	}
}
