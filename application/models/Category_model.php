<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{
	public $table = "categories";
	
	function __construct(){
		
		
		$this->has_many_pivot['articles'] = array(
			'foreign_model'=>'article_model',
			'pivot_table'=>	'articles_categories',
			'local_key'=>'id',
			'pivot_local_key'=>'category_id',
			'pivot_foreign_key'=>'article_id',
			'foreign_key'=>'id',
			'get_relate'=>false
		);
		
		parent::__construct();
		
	}
	
	function get_dropdown($model){
		$lists = $this->as_dropdown('name')->where(array('model'=>$model,'active'=>'Y'))->get_all();
		return $lists;

	}
	
	function get_menu_category(){
		return $this->where(array('model'=>'article','active'=>'Y','on_menu'=>'Y'))->fields(array('name','slug'))->get_all();
	}
	
	function get_cats_with_articles($category_slug){
		return $this->with_articles('fields:id,title,image,description')->where(array('active'=>'Y','slug'=>$category_slug))->get();
	}
	
}
