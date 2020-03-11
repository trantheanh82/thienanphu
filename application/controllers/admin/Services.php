<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Admin_Controller {
	function __construct(){
		
		parent::__construct();
		
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}
		$this->load->model('page_model');
		$this->data['page_name'] = 'Pages';
		
	}
	
	function index(){
		
		$this->render('admin/services/services_view');
	}
}	