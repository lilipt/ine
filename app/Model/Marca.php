<?php
App::uses('AppModel', 'Model');
/**
 * Marca Model
 *
 * @property Equipo $Equipo
 */
class Marca extends AppModel {

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
			'foreignKey' => 'marca_id',
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
