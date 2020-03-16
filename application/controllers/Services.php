<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->model('service_model');
		$this->load->language('services_lang');
		$this->data['page_header_title'] = 'Services';
		
	}
	
	public function index(){
		
		$this->data['items'] = $this->service_model->where(array('active'=>'Y'))->fields(array('name','slug','description','image'))->order_by('sort','ASC')->get_all();
		$this->render('default/services/service_view');
	}
	
	public function view($slug){
		
		$this->load->library('../controllers/news');
		
		$this->data['other_categories'] =  $this->news->module_news();
		
		$this->data['item'] = $this->service_model->with_user()->where(array('active'=>'Y','slug'=>$slug))->get();
		//pr($this->data['item']);
		$this->data['page_header_title'] = $this->data['meta_title'] = $this->data['item']->name;
		$this->data['page_header_description'] = $this->data['meta_description'] = $this->data['item']->description;
		
		$this->data['r_services'] = $this->service_model->with_user()->where(array('active'=>'Y','id <>'=>$this->data['item']->id))->order_by('sort','DESC')->get_all();
		
		$this->render('default/services/service_detail');
	}

}