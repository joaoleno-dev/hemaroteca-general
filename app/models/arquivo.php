<?php
class Arquivo extends AppModel {
	var $name = 'Arquivo';
	var $displayField = 'nome_arquivo';
	var $validate = array(
		'publicacao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Publicacao' => array(
			'className' => 'Publicacao',
			'foreignKey' => 'publicacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function beforeSave($options ) {
		$this->data['Arquivo']['data_cadastro'] = date('Y-m-d H:i:s');
		return true;
	}
	
}
