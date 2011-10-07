<?php
class TipoVeiculo extends AppModel {
	var $name = 'TipoVeiculo';
	var $displayField = 'descricao';
	var $validate = array(
		'descricao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Veiculo' => array(
			'className' => 'Veiculo',
			'foreignKey' => 'tipo_veiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	function beforeSave($options ) {
		if(!isset($this->data['TipoVeiculo']['id'])) {
			$this->data['TipoVeiculo']['data_cadastro'] = date('Y-m-d H:i:s');
		}
		return true;
	}

}
