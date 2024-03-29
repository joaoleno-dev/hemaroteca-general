<?php
class PublicacaosController extends AppController {

	var $name = 'Publicacaos';
	var $upload_dir = "/var/www/hemaroteca/app/webroot/img/uploads/";
	var $dir_separator = '/'; 
	var $helpers = array('Time');
	var $paginate = array('limit' => 10);

	private function create_dir($data = array()) {
		$upload_dir = $this->upload_dir.$this->dir_separator.'temp';	
			
		$this->loadModel('TipoVeiculo');
		$this->loadModel('Veiculo');
		if(isset($data)) {
			$this->TipoVeiculo->id = $data['Publicacao']['tipo_veiculo_id'];
			$tipo_veiculo = $this->TipoVeiculo->field('descricao');
			 
			$this->Veiculo->id = $data['Publicacao']['veiculo_id'];
			$veiculo = $this->Veiculo->field('descricao');
			
			$ano = $data['Publicacao']['data_publicacao']['year'];
			
			$path_to_img = 
				$this->upload_dir.
				strtolower($tipo_veiculo).
				$this->dir_separator.
				strtolower(str_replace( ' ', '',$veiculo)).
				$this->dir_separator.
				$ano.
				$this->dir_separator.
				$data['Publicacao']['data_publicacao']['day'].'-'.$data['Publicacao']['data_publicacao']['month']
				.$this->dir_separator;
			
			if(mkdir($path_to_img,0777,true)) {
				// echo 'Diretorio '.$path_to_img.' criado com sucesso.';
				$upload_dir = $path_to_img;
			} else {
				die('Erro na criação do diretório '.$path_to_img);
				// echo 'Erro na cria��o do diret�rio '.$path_to_img;	
			}
			return $upload_dir;
		}
	}

	function load_veiculos($tipo_veiculo_id = null) {
		$this->layout = 'ajax';
		if(isset($tipo_veiculo_id) && !empty($tipo_veiculo_id)) {
			$this->loadModel('Veiculo');
			$veiculos = $this->Veiculo->find('list',array('conditions' => array('Veiculo.tipo_veiculo_id' => $tipo_veiculo_id)));
			$this->set(compact('veiculos'));
		}
	}

	function index() {
		$this->Publicacao->recursive = 0;
		$filtro = array();
		if(isset($this->data) && !empty($this->data)) {
			if(isset($this->data['Publicacao']['titulo']) && !empty($this->data['Publicacao']['titulo'])) {
				$filtro['UPPER(Publicacao.titulo) LIKE'] = '%'.strtoupper($this->data['Publicacao']['titulo']).'%';
			}
			if(isset($this->data['Publicacao']['resumo']) && !empty($this->data['Publicacao']['resumo'])) {
				$filtro['UPPER(Publicacao.resumo) LIKE'] = '%'.strtoupper($this->data['Publicacao']['resumo']).'%';
			}
			if(isset($this->data['Publicacao']['avaliacao']) && $this->data['Publicacao']['avaliacao'] != '') {
				$filtro['Publicacao.avaliacao'] = $this->data['Publicacao']['avaliacao'];
			}
			$this->paginate = array(
				'limit' => 15,
				'order' => array('Publicacao.id' => 'asc'),
				'conditions' => array($filtro)
			);
			$result = $this->paginate();
		} else {
			$result =  $this->paginate();
		}
		$this->set('publicacaos', $result);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid publicacao', true),'flash_bad');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('publicacao', $this->Publicacao->read(null, $id));
	}
	
	function add() {
		if (!empty($this->data)) {
			/*
			 * Arrumar os campos dos arquivos de upload
			 * */
			for($n = 0; $n < count($_FILES['arquivos']['name']);$n++) {
				$this->data['Publicacao']['arquivos'][$n]['name'] = $_FILES['arquivos']['name'][$n];
				$this->data['Publicacao']['arquivos'][$n]['type'] = $_FILES['arquivos']['type'][$n];
				$this->data['Publicacao']['arquivos'][$n]['tmp_name'] = $_FILES['arquivos']['tmp_name'][$n];
				$this->data['Publicacao']['arquivos'][$n]['error'] = $_FILES['arquivos']['error'][$n];
				$this->data['Publicacao']['arquivos'][$n]['size'] =	  $_FILES['arquivos']['size'][$n];
			}
			
			$this->loadModel('Arquivo');
			$this->Publicacao->create();
			
			/*
			 * Salva os dados do formulário da publicação
			 * */
			if ($this->Publicacao->save($this->data)) {
				/*
				 * A partir daqui, é necessário mover um a um cada arquivo de upload 
				 */
				$upload_dir = $this->create_dir($this->data);
				foreach($this->data['Publicacao']['arquivos'] as $arquivo) {
					/*
					 * Se o arquivo é movido com sucesso, partimos para o cadastro dos metadados.
					 */
					$upload_file = $upload_dir . basename($arquivo['name']);
					
					echo '<pre>';
					print_r($upload_file);
					echo '</pre>';
					
					if(move_uploaded_file($arquivo['tmp_name'], $upload_file)) {
						$this->Session->setFlash('Arquivo '.$arquivo['name'].' foi tranferido com sucesso.');	
						$this->Arquivo->create();
						$arquivo['arquivo_url'] = $upload_file;
						$arquivo['nome_arquivo'] = $arquivo['name'];
						$arquivo['publicacao_id'] = $this->Publicacao->id;
						if ($this->Arquivo->save($arquivo)) {
							$this->Session->setFlash(__('Os metadados do arquivo foram salvos com sucesso', true),'flash_good');
							//$this->redirect(array('action' => 'index'));
						} else {
							$this->Session->setFlash(__('The arquivo could not be saved. Please, try again.', true),'flash_bad');
						}//if ($this->Arquivo->save($this->data))
					} else {
						$this->Session->setFlash('ERRO na transferência do arquivo '.$arquivo['name'],'flash_bad');	
					}//if(move_uploaded_file($arquivo['tmp_name'], $upload_file))
				}//foreach($this->data['Publicacao']['arquivos'] as $arquivo)
				$this->Session->setFlash(__('The publicacao has been saved', true),'flash_good');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacao could not be saved. Please, try again.', true),'flash_bad');
			}
		}
		$this->loadModel('TipoVeiculo');
		$tipoVeiculos = $this->TipoVeiculo->find('list');
		$this->set(compact('tipoVeiculos'));
	}

	/*function add() {
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
	}*/

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid publicacao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Publicacao->save($this->data)) {
				$this->Session->setFlash(__('The publicacao has been saved', true),'flash_good');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacao could not be saved. Please, try again.', true),'flash_bad');
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
			$this->Session->setFlash(__('Invalid id for publicacao', true),'flash_bad');
			$this->redirect(array('action'=>'index'));
		}
		$this->loadModel('Arquivo');
		$this->Publicacao->id = $id;
		$publicacao = $this->Publicacao->read();
		foreach($publicacao['Arquivo'] as $arquivo) {
			if(unlink($arquivo['arquivo_url']) && $this->Arquivo->delete($arquivo['id'])) {
				//Arquivo deletado com sucesso.
			} else {
				//ERRO na deleção	
				if(!fopen($arquivo['arquivo_url'], 'a')) {
					$this->Arquivo->delete($arquivo['id']);
				} 
			}
		}
		if ($this->Publicacao->delete($id)) {
			$this->Session->setFlash(__('Publicacao deleted', true),'flash_good');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Publicacao was not deleted', true),'flash_bad');
		$this->redirect(array('action' => 'index'));
	}
}
