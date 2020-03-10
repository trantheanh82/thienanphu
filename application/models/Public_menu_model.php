<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Public_menu_model extends MY_Model
{
	
	private $validated = TRUE;
	public $table = "public_menu";
	
	var $before_create = array();
	var $after_update = array();
	
	function __construct()
	{
		$this->before_create[] = 'delete_cache';
		$this->before_update[] = 'delete_cache';
		
		$this->after_create[] = 'update_cache';
		$this->after_update[] = 'update_cache';
		parent::__construct();
		
	}
	
	public $rules = array(
		'insert' => array(
			'name'=> array(
				'field'=> 'name',
				'label'=> 'name',
				'rules'=> 'trim|required|valid_email',
				'errors' => array ('required' => 'Error Name rule "required" for field ')
			)
		)	
	);
	
	public function delete_cache(){
		$this->cache_delete('public_menu_model');
	}
	
	public function update_cache(){
		
	}
}
