<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Public_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->language('news_lang');
		$this->load->model('article_model');
		$this->load->model('category_model');
		$this->load->model('service_model');
		
		$this->data['other_category'] = $this->category_model->where(array('active'=>'Y','model'=>'article'))->get_all();
		$this->data['module_services'] = $this->service_model->where(array('active'=>'Y'))->order_by('sort','ASC')->get_all();
	}
	
	public function index($category_slug = 'tin-hoat-dong',$page=1){
		
		$limit = 5;
		$offset = ($page-1)*$limit;
		
		$this->data['category'] = $this->category_model->where(array('active'=>'Y','slug'=>$category_slug))->get();
		
		if(empty($this->data['category'])){
			redirect('home','refresh');
		}
		
		$this->data['page_header_title'] = $this->data['category']->name;
		$this->data['page_header_description'] = $this->data['category']->description;
		
		//Count rows for paginate
		$total_items = count($this->article_model->with_category('fields:name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->where('active','Y')->fields('id')->as_array()->get_all());
		$this->db->flush_cache();


		$this->data['items'] = $this->article_model->with_category('fields:slug,name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->with_user()->where('active','Y')->order_by('created_at','DESC')->limit($limit,$offset)->as_object()->get_all();
		
		
		$this->data['total_pages'] = intval($total_items/$limit) + (($total_items%$limit)>0?1:0);
		$this->data['current_page'] = $page;
		$this->data['limit'] 		= $limit;
				
		$this->render('default/news/listing_news');
	}
	
	/*Detail Article*/
	function detail($category_slug,$article_id,$article_slug){
		$this->data['category'] = $this->category_model->where(array('active'=>'Y','slug'=>$category_slug))->get();
		
		if(empty($this->data['category'])){
			redirect('home','refresh');
		}
		$this->data['page_header_title'] = $this->data['category']->name;
		$this->data['page_header_description'] = $this->data['category']->description;
		
		$this->data['item'] = $this->article_model->with_category('fields:slug,name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->with_user()->where(array('active'=>'Y','id'=>$article_id))->get();
		
		$this->db->flush_cache();
		$this->data['nitem'] = $this->article_model->with_category('fields:id,slug','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->where(array('created_at >' => $this->data['item']->created_at))->limit(1)->order_by('created_at','ASC')->fields(array('id','slug','image','title','created_at'))->get();
		

		$this->data['pitem'] = $this->article_model->with_category('fields:id,slug','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->where(array('created_at <' => $this->data['item']->created_at))->limit(1)->order_by('created_at','DESC')->fields(array('id','slug','image','title','created_at'))->get();
		$this->data['category_slug'] = $category_slug;
		
		
		$this->render('default/news/detail_news');
	}
	
	public function module_news(){
		return $this->data['other_category'] = $this->category_model->where(array('active'=>'Y','model'=>'article'))->get_all();
	}

}