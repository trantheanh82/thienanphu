<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->model('service_model');
		$this->load->language('services_lang');
	}
	
	public function index(){
		$this->data['page_header_title'] = "Service";
		
		$this->data['items'] = $this->service_model->where(array('active'=>'Y'))->fields(array('name','slug','description','image'))->order_by('sort','ASC')->get_all();
		$this->render('default/services/service_view');
	}
	
	public function view($slug){
		
	}

}