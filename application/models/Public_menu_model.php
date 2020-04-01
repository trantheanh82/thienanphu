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
		/*$this->before_create[] = 'delete_cache';
		$this->before_update[] = 'delete_cache';*/
		
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
	
	public function getTreeMenu(){
		$items = $this->where('active','Y')->fields(array('parent_id','controller','action','type','id','name','slug'))->order_by(array('parent_id'=>'ASC','sort'=>'ASC'))->get_all();
		$menus = $this->__menu(0,$items);
		return $menus;
	}
	
	public function del_cache(){
		$this->cache_delete('public_menu');
	}
	
	public function update_cache(){
		
	}
	
	private function __menu($parent_id,$children){
		if(is_array($children)){
			$parents = $children;
			$items = array();
			foreach($children as $k => $v){
				if($children[$k]->parent_id == $parent_id){
					unset($parents[$k]);
					$items[$k] = $v;
					$items[$k]->children = $this->__menu($v->id,$parents);
				}
			}
			return $items;
		}else{
			return;
		}
	}
}
