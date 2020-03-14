<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{
	public $table = "categories";
	
	function __construct(){
		parent::__construct();
	}
	
	function get_dropdown($model){
		$lists = $this->as_dropdown('name')->where(array('model'=>$model,'active'=>'Y'))->get_all();
		return $lists;

	}
	
	function get_menu_category(){
		return $this->where(array('model'=>'article','active'=>'Y','on_menu'=>'Y'))->fields(array('name','slug'))->get_all();
	}
	
}
