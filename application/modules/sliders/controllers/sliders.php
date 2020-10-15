<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends Public_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('slider_model');

	}

	function sliders(){
		$this->data['sliders'] = $this->slider_model->where(array('active'=>'Y'))->get_all();
		pr($this->data['sliders']);exit();
		$this->render('sliders/sliders','module');
	}
}
?>
