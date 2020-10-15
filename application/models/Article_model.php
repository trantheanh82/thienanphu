<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model
{
	public $table = "articles";

    public function __construct()
    {
	    $this->has_many_pivot['categories'] = array(
	    	'foreign_model'=>'Category_model',
	    	'pivot_table'=>'articles_categories',
	    	'local_key'=>'id',
	    	'pivot_local_key'=>'article_id',
	    	'pivot_foreign_key'=>'category_id',
	    	'foreign_key'=>'id');

	    $this->has_one['user'] = array('foreign_model'=>'User_model','foreign_key'=>'id','local_key'=>'created_by');
	    $this->has_many['articles_categories'] = array(
	    	'foreign_model'=>'Article_category_model',
	    	'foreign_table'=>'articles_categories',
	    	'foreign_key'=>'article_id',
	    	'local_key'=>'id');

        parent::__construct();
    }

    function get_articles($category_slug){
			$itemss = $this->with_category()->fields('id,description,title,image')->get_all();
			return $itemss;
		}

		function get_newest_articles($limit = 6){
			$items = $this->with_categories('fields:slug','where:`categories`.`active`=\'Y\'')->limit($limit)->where('active','Y')->order_by('created_at','DESC')->get_all();
			return $items;
		}

}
