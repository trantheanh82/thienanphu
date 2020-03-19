<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacture_model extends MY_Model
{
	public $table = 'manufactures';
	
	function __construct(){
		
		$this->timestamps = FALSE;
		
		$this->has_many['product'] = array(
					'foreign_model'=>'product_model',
					'foreign_table'=>'products',
					'foreign_key'=>'brand_id',
					'local_key'=>'id'
					
		);
		$this->has_many_pivot['brand_type'] = array(
					'foreign_model' => 'product_type_model',
					'pivot_table'=>'manufacture_types',
					'local_key'=>'id',
					'pivot_local_key'=>'manufacture_id',
					'pivot_foreign_key'=>'product_type_id',
					'foreign_key'=>'id');
		
		parent::__construct();
	}
}
