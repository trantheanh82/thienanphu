<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->language('pages_lang');
	}
	
	public function contact(){
		
		$this->data['page_header_title'] = "Contact";
		$this->render('default/pages/contact_us_view');
	}

}