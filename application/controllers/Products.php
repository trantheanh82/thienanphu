<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Public_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->model('solution_model');
		$this->load->language('solutions_lang');
		$this->load->model('product_model');
		$this->load->model('manufacture_model');
		$this->data['page_header_title'] = 'Products';

	}

	function index($product_slug){

		$this->render('default/products/product_detail_view');
	}

	function detail($slug =""){

		$item = $this->product_model->get_product_detail(urldecode($slug));
		$items_related = $this->product_model->get_product_related($item);

		$this->data['page_header_description'] = $item->name;
		$this->data['item'] = $item;
		$this->data['items_related'] = $items_related;

		$this->breadcrumbs->push(lang("Products"),'/products');
		$this->breadcrumbs->push($this->data['item']->name,'/');

		$this->render('default/products/product_detail_view');
	}

	function manufactures($manufacture_slug){

		$this->render('default/products/manufacture_product_view');
	}

}
