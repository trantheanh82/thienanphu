<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solutions extends Admin_Controller {
	function __construct(){
		
		parent::__construct();
		
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Solutions service');
			redirect('admin','refresh');
		}
		
		$this->data['before_head'] .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">';

		$this->data['before_head'] .= assets('/css/Xwin-icons.css',false);		
		$this->data['before_body'] .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>';
		$this->data['before_body'] .= '<script>$.fn.selectpicker.Constructor.DEFAULTS.iconBase="fa";</script>';
		
		$this->load->model('solution_model');
		$this->data['page_name'] = 'solutions';
		
	}
	
	function index(){
		$this->data['items'] = $this->solution_model->get_all();
		$this->render('admin/solutions/listing_view');
	}
	
	function create(){
		$this->data['icons'] = $this->fetch_icon();
		$this->render('admin/solutions/create_edit_view');
	}
	
	function edit($id){
		$this->data['icons'] = $this->fetch_icon();
		if(!empty($id)){
			$this->data['item'] = $this->solution_model->get($id);
			$this->render('admin/solutions/create_edit_view');
		}else{
			$this->session->set-flashdata('error','Please provide a service to edit.');
			redirect('admin/service','refresh');
		}
	}
	
	function submit(){
		$data = $this->input->post();
		$data_id = 0;
		
		if(isset($data['id'])){
			$data_id = $data['id'];
		}
		
		$slug = $this->solution_model->where(array('slug'=>$data['slug'],'id <> ' => $data_id))->get();
		
		if(!empty($slug)){
			$data['slug'] .= "-".date('Ymdhis');		
		}
		
		if(empty($data['meta_title'])){
			$data['meta_title'] = $data['name'];
		}
		
		if(empty($data['meta_description'])){
			$data['meta_description'] = strip_tags($data['description']);
		}
		
		if(!empty($data['id'])){
			
			if($this->solution_model->update($data,$data['id'])){
												
				$this->session->set_flashdata('message','services has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{
			
			if($id = $this->solution_model->insert($data)){
				
				$this->session->set_flashdata('message','services has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}
		
		redirect('admin/solutions','refresh');
	}
	
	function fetch_icon(){
		$file = FCPATH.'assets/css/Xwin-icons.css';
		
		$icon_file = fopen($file,'r') or die("Unable to open file!");
		$file_content = fread($icon_file,filesize($file));
		
		preg_match_all('/\.(.*?):\b/i', $file_content,$matchs);
		return $matchs[1];	
	}
}	