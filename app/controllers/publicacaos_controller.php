<?php
class PublicacaosController extends AppController {

	var $name = 'Publicacaos';

	function index() {
		$this->Publicacao->recursive = 0;
		$this->set('publicacaos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid publicacao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('publicacao', $this->Publicacao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Publicacao->create();
			if ($this->Publicacao->save($this->data)) {
				$this->Session->setFlash(__('The publicacao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacao could not be saved. Please, try again.', true));
			}
		}
		$veiculos = $this->Publicacao->Veiculo->find('list');
		$this->set(compact('veiculos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid publicacao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Publicacao->save($this->data)) {
				$this->Session->setFlash(__('The publicacao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Publicacao->read(null, $id);
		}
		$veiculos = $this->Publicacao->Veiculo->find('list');
		$this->set(compact('veiculos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for publicacao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Publicacao->delete($id)) {
			$this->Session->setFlash(__('Publicacao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Publicacao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
