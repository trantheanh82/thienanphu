<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('product_model');

		$this->load->library('ion_auth');
		$this->data['page_name'] = 'Products';

		$this->data['before_body'] .= assets("js/simple.money.format.js");

		$this->data['script_for_layout'] .= "<script>
			$(document).ready(function(){
				$('.currency').simpleMoneyFormat();

			});

		</script>";
	}

	function index(){
		if(!$this->ion_auth->in_group('admin'))
        {
            $this->session->set_flashdata('message','You are not allowed to visit the Pages page');
            redirect('admin/auth/login','refresh');
        }

		$this->data['items']  = $this->product_model->with_images('fields:image')->order_by('created_at','DESC')->get_all();

		foreach($this->data['items'] as $k=>$v){

			if(!empty($v->images->image)){
				$images = unserialize($v->images->image);
				$this->data['items'][$k]->image = array_values($images)[0];
			}
		}

		$this->render('admin/products/products_view');
	}


	function create(){
		$this->__loadScriptUpload();

		$this->data['manufactures'] = $this->_loadSelectOption('manufacture_model');
		$this->data['product_types'] = $this->_loadSelectOption('product_type_model');
		$this->data['solutions'] = $this->_loadSelectOption('solution_model');
		$this->data['product_type_items'] = $this->_loadSelectOption('product_type_model',false);

		$this->render('admin/products/product_create_edit_view');
	}

	function edit($id){

		$this->__loadScriptUpload();

		$this->data['manufactures'] = $this->_loadSelectOption('manufacture_model');
		$this->data['product_types'] = $this->_loadSelectOption('product_type_model');
		$this->data['product_type_items'] = $this->_loadSelectOption('product_type_model',false);
		$this->data['solutions'] = $this->_loadSelectOption('solution_model');

		$this->data['item'] = $this->product_model->get_product($id);
		$this->render('admin/products/product_create_edit_view');
	}

	function delete($id){
		if(!empty($id)){
			if($this->product_model->delete($id)){
				$this->session->set_flashdata('message','Product has been deleted');
			}else{
				$this->session->set_flashdata('error','Error occures. Please try again');
			}
			redirect('admin/products','refresh');
		}
		$this->session->set_flashdata('error','Error occures. Please try again');
		redirect('admin/products','refresh');
	}

	function submit(){
		if(!empty($this->input->post())){
			$data = $this->input->post();
			$data_id = 0;
			if(isset($data['id'])){
				$data_id = $data['id'];
			}

			$slug = $this->product_model->fields('slug,id')->where(array('slug'=>$data['slug'],'id <> ' => $data_id))->get();
			if(!empty($slug)){
				$data['slug'] .= $data['code']."-".date('his');
			}

			if(isset($data['has_many'])){
				if(!empty($data['product_image'])){
					//rearrange array key
					$data['product_image'] = array_merge($data['product_image']);
					$images = $data['product_image'];
					unset($data['product_image']);
				}else{
					$images = "";
				}
			}

			if(empty($data['description']))
				$data['description'] = strip_tags(getSnippet($data['content'],50));

			/*For meta title and description*/
			if(empty($data['page_title']))
				$data['page_title'] = $data['name'];

			if(empty($data['page_description']))
				$data['page_description'] = getSnippet(strip_tags($data['description']),50);


			/*prepare for manufacture_product_type*/
			$mp['manufacture_id'] = $data['manufacture_id'];
			$mp['product_type_id'] = $data['product_type_id'];


			if(!empty($data['id'])){

				if($this->product_model->update($data,$data['id'])){

					$this->_insert_images($images,$data);

					$this->load->model('manufacture_product_type_model');

					$this->session->set_flashdata('message','Product has been updated');
				}else{
					$this->session->set_flashdata('error','Error occures. Please try again');
				}

			}else{

				if(!isset($data['page_title'])){
					$data['page_title'] = $data['name'];
				}

				if($data['id'] = $this->product_model->insert($data)){
					$this->_insert_images($images,$data);

					$this->load->model('manufacture_product_type_model');

					$this->session->set_flashdata('message','Product has been created');
				}else{
					$this->session->set_flashdata('error','Error occures. Please try again');
				}
			}

			redirect('admin/products','refresh');
		}
	}


	function _insert_images($images = "",$data){
		$this->load->model('image_model');

		$image_exists = $this->image_model->where(array('model'=>'product','model_id'=>$data['id']))->get();

		if(!empty($images)){


			$serialize_images = serialize($images);

			$image['image'] = $serialize_images;
			$image['model'] = 'product';
			$image['model_id']  = $data['id'];
			$image['alt']	=	$data['name'];


			if(empty($image_exists)){
				$this->image_model->insert($image);
			}else{
				$this->image_model->update($image,$image_exists->id);
			}
		}else{
			if(!empty($image_exists)){
				echo "ifempty images_exits";
				$this->image_model->update(array('image'=>''),$image_exists->id);
			}
		}
	}

	function _loadSelectOption($model,$dropdown = true){
		$this->load->model($model);

		if($dropdown){
			return $this->$model->where('active','Y')->order_by('name','ASC')->as_dropdown('name')->get_all();
		}else{
			return $this->$model->where('active','Y')->order_by('name','ASC')->get_all();
		}
	}


	function __count_MPT($data){

	}

}
