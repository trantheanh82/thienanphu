<?php

class Public_Controller extends MY_Controller{
	function __construct(){

		parent:: __construct();
		
		$this->data['page_title'] = "";

		$this->data['Settings'] = $this->__getGlobalSettings();

		$this->data['public_menu'] = $this->__getPublicMenu();
		
		$this->data['footer_links'] = $this->__getFooterLinks();

		$this->data['langs'] = $this->__getLanguages();

		$this->data['css_for_elements'] .= "";

		$this->data['before_head'] .= assets('js/jquery-2.2.3.js',false);
	}

	/**
	* Get Global Menu
	*
	**/
	function __getPublicMenu(){
		
		$public_menu = $this->cache->get('public_menu');
		
		if(!$public_menu){
			$this->load->model('public_menu_model');
			
			//$this->db->cache_on();
			$public_menu = $this->public_menu_model->getTreeMenu();
			
			foreach($public_menu as $k => $v){
				
				switch($v->name){
					case 'About us':
						$this->load->model('page_model');
						$public_menu[$k]->children = $this->page_model->get_menu_about();

					break;
					case 'Services':
						$this->load->model('service_model');
						$public_menu[$k]->children = $this->service_model->get_menu_services();
					break;
					case 'Manufactures':
						$this->load->model('manufacture_model');
						$public_menu[$k]->children = $this->manufacture_model->get_home_menu();
					break;
					case 'News':
						$this->load->model('category_model');
						$public_menu[$k]->children = $this->category_model->get_menu_category();
					break;
					case 'Products & Solutions':
						$this->load->model('solution_model');
						$public_menu[$k]->children = $this->solution_model->get_menu_solutions();
					break;
				}
			}
			//$this->cache->save('public_menu',$public_menu);
		}
		
		return $public_menu;

	}
	
	function __getFooterLinks(){
		$this->load->model('link_model');
		
		$links = $this->link_model->where(array('active'=>'Y','show_in'=>'footer'))->order_by('sort','asc')->get_all();
		
		return $links;
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