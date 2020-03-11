<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Admin_Controller {
	function __construct(){
		
		parent::__construct();
		
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups service');
			redirect('admin','refresh');
		}
		$this->load->model('service_model');
		$this->data['page_name'] = 'Service';
		
	}
	
	function index(){
		$this->data['items'] = $this->service_model->get_all();
		$this->render('admin/services/services_view');
	}
	
	function create(){
		$this->render('admin/services/services_create_edit_view');
	}
	
	function edit($id){
		if(!empty($id)){
			$this->data['item'] = $this->service_model->get($id);
			$this->render('admin/services/services_create_edit_view');
		}else{
			$this->session->set-flashdata('error','Please provide a service to edit.');
			redirect('admin/service','refresh');
		}
	}
	
	function submit(){
		$data = $this->input->post();
		/*$cat_ids = $data['category_ids'];
		unset($data['category_ids']);
		unset($data['files']);
		$this->load->model('service_category_model');*/
		$data = $this->input->post();
		$data_id = 0;
		
		if(isset($data['id'])){
			$data_id = $data['id'];
		}
		
		$slug = $this->service_model->where(array('slug'=>$data['slug'],'id <> ' => $data_id))->get();
		
		if(!empty($slug)){
			$data['slug'] .= "-".date('Ymdhis');		
		}
		
		if(!empty($data['id'])){
			
			if($this->service_model->update($data,$data['id'])){
								
				//$this->service_category_model->delete(array('service_id'=>$data['id']));
				
				$this->session->set_flashdata('message','services has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->service_model->insert($data)){
				
				$this->session->set_flashdata('message','services has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/services','refresh');
	}
}	