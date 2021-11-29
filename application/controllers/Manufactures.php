<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufactures extends Public_Controller {

	public function __construct(){
		parent::__construct();
		$this->data['page_header_title'] = "Manufactures";

	}

	function index($slug='hp'){
		$this->data['item'] = $this->manufacture_model->get_products($slug);

		$this->breadcrumbs->push(lang("Manufactures"),'/manufactures');
		$this->breadcrumbs->push($this->data['item']->name,'/');
		$this->render('default/manufactures/index_view');
	}

}
