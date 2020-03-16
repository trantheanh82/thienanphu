<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->language('pages_lang');
	}
	
	public function index($slug){
		$this->data['item'] = $this->page_model->where(array('active'=>'Y'))->get();
		$this->data['page_header_title'] = $this->data['item']->name;
		
		
		if($this->data['item']->slug == 'gioi-thieu'){
			$this->render('default/pages/about_us_view');
		}else{
			$this->render('default/pages/view');
		}
	}
	
	public function contact(){
		
		$this->data['page_header_title'] = "Contact";
		$this->render('default/pages/contact_us_view');
	}

}