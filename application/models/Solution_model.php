<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Solution_model extends MY_Model
{

	public $table = "solutions";
    public function __construct()
    {
    	//$this->has_many['translations'] = array('Page_translation_model','page_id','id');
    	$this->has_many['products'] = array('Product_model','solution_id','id');

        parent::__construct();
    }

    public function get_others($except_id){
	    return $this->where(array('active'=>'Y','id <>'=>$except_id))->order_by('sort','asc')->get_all();
    }

    public function get_home_solutions(){
	    return $this->where(array('active'=>'Y'))->order_by('sort','asc')->get_all();
    }

    public function get_solution_products($slug,$limit_products=5){
	    $item = $this->where(array('active'=>'Y','slug'=>$slug))->get();
	    $item->products = $this->product_model->fields(array('id','slug','name','description'))->where(array('active'=>'Y','solution_id'=>$item->id))->limit($limit_products)->with_images('fields:image')->get_all();

			if(!empty($item->products)){
		    foreach($item->products as $k=>$v){
			    if(!empty($v->images->image)){
				    $item->products[$k]->images = unserialize($v->images->image)[0];
			    }else{
				    $item->products[$k]->images = "";
			    }
		    }
			}
	    return $item;
    }

    function get_menu_solutions(){
	    $this->load->model('product_model');
	    $items = $this->where(array('active'=>'Y'))->fields(array('id','name','slug','icon','description'))->get_all();

	    /*foreach($items as $k=>$v){
		    $items[$k]->products = $this->product_model->fields('id,name,slug')->where(array('active'=>'Y','solution_id'=>$v->id))->order_by('created_at','desc')->limit(4)->get_all();
	    }*/

	    return $items;
    }
}
