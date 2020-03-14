<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model
{
	public $table = "articles";
	
    public function __construct()
    {
	    $this->has_many['article_category'] = array('foreign_model'=>'article_category_model','foreign_key'=>'article_id','local_key'=>'id');
	    $this->has_many_pivot['category'] = array(
	    	'foreign_model'=>'Category_model',
	    	'pivot_table'=>'articles_categories',
	    	'local_key'=>'id',
	    	'pivot_local_key'=>'article_id',
	    	'pivot_foreign_key'=>'category_id',
	    	'foreign_key'=>'id');
	    	
	    $this->has_one['user'] = array('User_model','id','created_by');
        parent::__construct();
    }
    
    

}