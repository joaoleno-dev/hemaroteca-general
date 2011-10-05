<?php
class VeiculosController extends AppController {

	var $name = 'Veiculos';

	function index() {
		$this->Veiculo->recursive = 0;
		$this->set('veiculos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid veiculo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('veiculo', $this->Veiculo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Veiculo->create();
			if ($this->Veiculo->save($this->data)) {
				$this->Session->setFlash(__('The veiculo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.', true));
			}
		}
		$tipoVeiculos = $this->Veiculo->TipoVeiculo->find('list');
		$this->set(compact('tipoVeiculos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid veiculo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Veiculo->save($this->data)) {
				$this->Session->setFlash(__('The veiculo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Veiculo->read(null, $id);
		}
		$tipoVeiculos = $this->Veiculo->TipoVeiculo->find('list');
		$this->set(compact('tipoVeiculos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for veiculo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Veiculo->delete($id)) {
			$this->Session->setFlash(__('Veiculo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Veiculo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
