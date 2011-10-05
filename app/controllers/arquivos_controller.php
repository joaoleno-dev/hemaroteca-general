<?php
class ArquivosController extends AppController {

	var $name = 'Arquivos';

	function index() {
		$this->Arquivo->recursive = 0;
		$this->set('arquivos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid arquivo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('arquivo', $this->Arquivo->read(null, $id));
	}

	function add() {
		$upload_dir = "/var/www/hemaroteca/uploads/";
		$upload_file = $upload_dir . basename($this->data['Arquivo']['arquivo_url']['name']);
		
		if (!empty($this->data)) {
			if(move_uploaded_file($this->data['Arquivo']['arquivo_url']['tmp_name'], $upload_file)) {
				$this->Session->setFlash('Arquivo '.$this->data['Arquivo']['arquivo_url']['name'].' foi tranferido com sucesso.');	
				$this->data['Arquivo']['arquivo_url'] = $upload_file;
				$this->data['Arquivo']['nome_arquivo'] = $this->data['Arquivo']['arquivo_url']['name'];
				$this->Arquivo->create();
				if ($this->Arquivo->save($this->data)) {
					$this->Session->setFlash(__('Os metadados do arquivo foram salvos com sucesso', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The arquivo could not be saved. Please, try again.', true));
				}//if ($this->Arquivo->save($this->data))
			} else {
				$this->Session->setFlash('ERRO na transferência do arquivo '.$this->data['Arquivo']['arquivo_url']['name']);	
			}//if(move_uploaded_file($this->data['Arquivo']['arquivo_url']['tmp_name'], $upload_file)) 
			
		}//if (!empty($this->data))
		$publicacaos = $this->Arquivo->Publicacao->find('list');
		$this->set(compact('publicacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid arquivo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Arquivo->save($this->data)) {
				$this->Session->setFlash(__('The arquivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arquivo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Arquivo->read(null, $id);
		}
		$publicacaos = $this->Arquivo->Publicacao->find('list');
		$this->set(compact('publicacaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for arquivo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Arquivo->delete($id)) {
			$this->Session->setFlash(__('Arquivo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Arquivo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
