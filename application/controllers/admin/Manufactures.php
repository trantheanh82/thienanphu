<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufactures extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('manufacture_model');
		
		$this->load->library('ion_auth');
		$this->data['page_name'] = 'manufactures';
				
		$this->data['script_for_layout'] .= "<script>
			$(document).ready(function(){
				$('.currency').simpleMoneyFormat();
			
			});
				
		</script>";
	}

	
	function index(){
		
		$this->data['items']  = $this->manufacture_model->order_by('sort','ASC')->get_all();
		
		$this->render('admin/manufactures/listing_view');
	}
	
	function create(){
		
		$this->render('admin/manufactures/manufacture_create_edit_view');

	}
	
	function edit($id){
		$this->data['item'] = $this->manufacture_model->get($id);
		$this->render('admin/manufactures/manufacture_create_edit_view');
	}
	
	function submit(){
		$data = $this->input->post();
		$data_id = 0;
		
		if(isset($data['id'])){
			$data_id = $data['id'];
		}
		
		$slug = $this->manufacture_model->where(array('slug'=>$data['slug'],'id <> ' => $data_id))->get();
		
		if(!empty($slug)){
			$data['slug'] .= "-".date('Ymdhis');		
		}
		
		if(empty($data['meta_title'])){
			$data['meta_title'] = $data['name'];
		}
		
		if(!empty($data['id'])){
			
			if($this->manufacture_model->update($data,$data['id'])){
								
				//$this->service_category_model->delete(array('service_id'=>$data['id']));
				
				$this->session->set_flashdata('message','Manufacture has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->manufacture_model->insert($data)){
				
				$this->session->set_flashdata('message','Manufacture has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/manufactures','refresh');
	}
	
}