<?php
App::uses('AppModel', 'Model');
/**
 * Tipo Model
 *
 * @property Equipo $Equipo
 */
class Tipo extends AppModel {


public $displayField = 'nombre';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Equipo' => array(
			'className' => 'Equipo',
			'foreignKey' => 'tipo_id',
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
