<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('link_model');
		
		$this->load->library('ion_auth');
		$this->data['page_name'] = 'Links';
	}
	
	function index(){
		$this->data['items'] = $this->link_model->order_by('id','desc')->get_all();
		
		$this->render('admin/links/listing_view');
	}
	
	function create(){
		$this->render('admin/links/create_edit_view');
	}
	
	function edit($id){
		$this->data['item'] = $this->link_model->get($id);
		$this->render('admin/links/create_edit_view');
	}
	
	function submit(){
		$data = $this->input->post();
		$data_id = 0;
		
		if(isset($data['id'])){
			$data_id = $data['id'];
		}
		$data['show_in'] = 'footer';
		if(!empty($data['id'])){
			
			if($this->link_model->update($data,$data['id'])){
								
				//$this->service_category_model->delete(array('service_id'=>$data['id']));
				
				$this->session->set_flashdata('message','Link has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->link_model->insert($data)){
				
				$this->session->set_flashdata('message','Link has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/links','refresh');
	}
}
