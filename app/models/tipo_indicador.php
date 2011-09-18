<?php
class TipoIndicador extends AppModel {
	
	public $name = 'TipoIndicador';
	public $useTable = 'tipo_indicadores';
	public $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'Indicador' => array(
			'className' => 'Indicador',
			'foreignKey' => 'tipo_indicadore_id',
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