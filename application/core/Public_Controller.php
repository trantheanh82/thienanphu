<?php

class Public_Controller extends MY_Controller{
	function __construct(){

		parent:: __construct();
		
		$this->data['page_title'] = "";

		$this->data['Settings'] = $this->__getGlobalSettings();

		$this->data['public_menu'] = $this->__getGlobalMenu("front");

		$this->data['langs'] = $this->__getLanguages();

		$this->data['css_for_elements'] .= "";

		$this->data['before_body'] .= '';
	}

	/**
	* Get Global Menu
	*
	**/
	function __getGlobalMenu(){

		/**
		$admin_menu = parent::__getMenus('admin');
		if(! $admin_menu = $this->cache->get('admin_menu')){

			$this->load->model('menu_model');
			$admin_menu = parent::__getMenus('admin');
		}
		$this->config->load('menu');
		$menu = $this->config->item('public');
		return $menu;
		**/
		
		$public_menu = $this->cache->get('public_menu');
		
		if(!$public_menu){
			$this->load->model('public_menu_model');
				$this->db->cache_on();
			$public_menu = $this->public_menu_model->where('active','Y')->order_by('sort','ASC')->get_all();
			$this->cache->save('public_menu',$public_menu);
		}
		
		$this->data['public_menu'] = $public_menu;
	}

	function __getLanguages(){
		
		if(! $langs = $this->cache->get('languages')){
			$this->load->model('language_model');

			$langs = $this->language_model->get_all(array('active'=>1));

			$this->cache->save('languages',$langs);
		}

		return $langs;
	}

	protected function render($the_view = null, $template = "master" ){
		parent::render($the_view, $template);
	}
	


}