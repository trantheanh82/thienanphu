<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solutions extends Public_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->model('solution_model');
		$this->load->language('solutions_lang');
		$this->load->model('product_model');
		$this->data['page_header_title'] = 'Solutions';

	}

	public function index($slug = ""){
		$this->breadcrumbs->push(lang('Solutions'),'/solutions');
		if(!empty($slug)){
			$this->data['item'] = $this->solution_model->get_solution_products($slug,8);
			$this->data['page_header_title'] = $this->data['item']->name;
			$this->data['page_header_description'] = 'Solutions';

				$this->breadcrumbs->push($this->data['item']->name,'/');
			$this->render('default/solutions/solutions_detail');

		}else{

			$this->data['items'] = $this->solution_model->where(array('active'=>'Y'))->fields(array('name','slug','description','image','icon'))->order_by('sort','ASC')->get_all();
			$this->data['products'] = $this->product_model->get_products_images();


			$this->render('default/solutions/solutions_view');
		}
	}

}
