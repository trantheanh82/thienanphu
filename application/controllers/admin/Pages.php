<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_Controller {
	
	
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
		$this->data['items'] = $this->page_model->order_by('created_at','ASC')->get_all();

		$this->render('admin/pages/page_index');
	}
	
	function create(){
		
		$this->load->model('category_model');
		$this->data['list_cats'] = $this->category_model->get_dropdown('page');

		$this->render('admin/pages/page_create_edit_view');
	}
	
	function edit($id){
		if(!empty($id)){
			
			$this->load->model('category_model');
			$this->data['list_cats'] = $this->category_model->get_dropdown('page');
			$this->data['item'] = $this->page_model->with_page_category()->get($id);
			$this->render('admin/pages/page_create_edit_view');
		}else{
			
			$this->session->set_flashdata('error','There is no page id to edited');
			redirect('admin/pages',true);
		}
	}
	
	function delete($id){
		if(!empty($id)){
			if($this->page_model->delete($id)){
				$this->session->set_flashdata('messege','The item has been deleted.');
				redirect('admin/pages','refresh');
			}else{
				$this->session->set_flashdata('messege','Error, please try again.');
			}
		}else{
			$this->session->set_flashdata('messege','There is no page id to delete.');
		}
		
		redirect('admin/pages','refresh');

	}
	
	function submit(){
		$data = $this->input->post();
		$cat_ids = $data['category_ids'];
		unset($data['category_ids']);
		unset($data['files']);
		$this->load->model('page_category_model');
		if(!empty($data['id'])){
			
			if($this->page_model->update($data,$data['id'])){
								
				$this->page_category_model->delete(array('page_id'=>$data['id']));
				foreach($cat_ids as $k => $v){
					$acat['page_id'] = $data['id'];
					$acat['category_id'] = $k;
					$acat['model'] = 'page';
					$this->page_category_model->insert($acat);
				}
				$this->session->set_flashdata('message','pages has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->page_model->insert($data)){
				foreach($cat_ids as $k => $v){
					$acat['page_id'] = $id;
					$acat['category_id'] = $k;
					$acat['model'] = 'page';
					$this->page_category_model->insert($acat);
				}
				$this->session->set_flashdata('message','pages has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/pages','refresh');
	}
	
}