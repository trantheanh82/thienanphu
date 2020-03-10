<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {


	public function __construct(){
		
		parent::__construct();

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		$this->load->model('sliders/Slider_model');
		
		$this->data['sliders'] = $this->Slider_model->where('active','Y')->get_all();
		
		//redirect('/admin/','true');exit();
		 $this->render('default/home/index_view');

	}

	function language($slug = null){
		$this->load->library('user_agent');

		redirect($this->agent->referrer());
		if($this->agent->is_referral()){

		}

	}

	public function clearcache(){
		$this->output->delete_cache();
		redirect('/', 'location');
	}
}
