<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producttypes extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('product_type_model');
		
		$this->load->library('ion_auth');
		$this->data['page_name'] = 'producttypes';
	
	}
	
	function index(){
		$this->data['items'] = $this->product_type_model->get_all();
		$this->render('admin/product_types/listing_view');
	}
	
	function create(){
		$this->render('admin/product_types/create_edit_view');
	}
	
	function edit($id){
		$this->data['item'] = $this->product_type_model->get($id);
		$this->render('admin/product_types/create_edit_view');
	}
	
	function delete($id){
		if($this->product_type_model->delete($id)){
			$this->session->set_flashdata('message','Product type has been deleted.');
		}
		redirect('admin/producttypes','refresh');
	}
	
	function submit(){
		$data = $this->input->post();
		$data_id = 0;
		
		if(isset($data['id'])){
			$data_id = $data['id'];
		}
		
		if(!empty($data['id'])){
			
			if($this->product_type_model->update($data,$data['id'])){
								
				//$this->service_category_model->delete(array('service_id'=>$data['id']));
				
				$this->session->set_flashdata('message','Product type has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->product_type_model->insert($data)){
				
				$this->session->set_flashdata('message','Product type has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/producttypes','refresh');
	}
}