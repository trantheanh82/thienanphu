<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->language('pages_lang');
	}

	public function index($slug = 'gioi-thieu'){
		$this->data['item'] = $this->page_model->where(array('active'=>'Y','slug'=>$slug))->get();
		$this->data['page_header_title'] = $this->data['item']->name;


		if($this->data['item']->slug == 'gioi-thieu'){
			$this->render('default/pages/about_us_view');
		}else{
			$this->render('default/pages/page_view');
		}
	}

	public function contact(){

		$this->data['page_header_title'] = "Contact";
		$this->data['before_body'] = '<script type="text/javascript" src="http://maps.google.com/maps/api/js?key='.$this->data['Settings']['google_api_key'].'"></script>'.assets('js/gmap.min.js',false);

		if($this->input->is_ajax_request()){
			if(!empty($this->input->post())){
				$data = $this->input->post();
				$this->load->model('contact_form_model');
				$data['ip'] = $this->get_client_ip();
				$data['user_id'] = '1';

				header('Content-Type: application/json');

				if($this->contact_form_model->insert($data)){
					echo json_encode( array('text'=>lang('Thank you for contacting us.')));
				}else{
					 echo json_encode( array('text'=>lang('Error occured, please try again.')));
				}
			}

			return;
		}

		$this->data['item'] = $this->page_model->where(array('active'=>'Y','slug'=>'contact'))->get();

		$this->render('default/pages/contact_us_view');
	}

}
