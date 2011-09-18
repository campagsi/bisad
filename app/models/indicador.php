<?php
class Indicador extends AppModel {
	
	public $name = 'Indicador';
	public $useTable = 'indicadores';
	public $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(	
		'TipoIndicador' => array(
			'className' => 'TipoIndicador',
			'foreignKey' => 'tipo_indicadore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoMedida' => array(
			'className' => 'TipoMedida',
			'foreignKey' => 'tipo_medida_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
