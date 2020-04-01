<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->language('home_lang');

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
		$this->load->model('article_model');
		$this->load->model('solution_model');
		$this->load->model('page_model');
		
		$this->data['home_article'] = $this->article_model->with_category('fields:slug','where:`categories`.`active`=\'Y\'')->limit(6)->where('active','Y')->order_by('created_at','DESC')->get_all();
		
		$this->data['home_solutions'] = $this->solution_model->get_home_solutions();
		
		$this->data['home_about'] = $this->page_model->get_page_home();
		
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
