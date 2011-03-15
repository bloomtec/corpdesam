<?php
class Page extends AppModel {
	var $name = 'Page';
	var $displayField = 'title';
	var $locale = 'en_us';
/*	var $actsAs=array(
		"Translate"=>array(
			"title"=>"title","description"=>"description","content"=>"content"
		)
	);*/
	var $validate = array(
		'title' => array(
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



}
?>