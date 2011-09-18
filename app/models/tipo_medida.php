<?php
class TipoMedida extends AppModel {
	
	public $name = 'TipoMedida';
	public $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'Indicadore' => array(
			'className' => 'Indicador',
			'foreignKey' => 'tipo_medida_id',
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
}
?>