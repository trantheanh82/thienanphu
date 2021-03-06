<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Public_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->language('news_lang');
		$this->load->model('article_model');
		$this->load->model('category_model');
		$this->load->model('service_model');
		$this->load->model('solution_model');


		$this->data['other_category'] = $this->category_model->where(array('active'=>'Y','model'=>'article'))->get_all();
		$this->data['module_services'] = $this->service_model->where(array('active'=>'Y'))->order_by('sort','ASC')->get_all();

		$this->breadcrumbs->push(lang("News"),'/news');
	}

	public function index($category_slug = 'tin-hoat-dong',$page=1){

		$limit = 10;
		$offset = ($page-1)*$limit;

		/*$this->data['category'] = $this->category_model->with_article()->where(array('active'=>'Y','slug'=>$category_slug))->get();*/

		$this->data['category'] = $this->category_model->where('slug',$category_slug)->get();


		if(empty($this->data['category'])){
			redirect('home','refresh');
		}

		$this->data['page_header_title'] = $this->data['category']->name;
		$this->data['page_header_description'] = $this->data['category']->description;

		//Count rows for paginate
		$total_items = count($this->article_model->with_categories('fields:name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->where('active','Y')->fields('id')->as_array()->get_all());

		//$this->db->flush_cache();

		$this->data['items'] = $this->article_model->with_categories('fields:slug,name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->with_user()->where('active','Y')->order_by('created_at','DESC')->limit($limit,$offset)->fields(array('id','slug','title','image','description','created_at'))->as_object()->get_all();


		$this->data['total_pages'] = intval($total_items/$limit) + (($total_items%$limit)>0?1:0);
		$this->data['current_page'] = $page;
		$this->data['limit'] 		= $limit;

		$this->data['module_solutions'] = $this->solution_model->where(array('active'=>'Y'))->get_all();

		$this->breadcrumbs->push($this->data['category']->name,'/news/'.$category_slug);
		$this->render('default/news/listing_news');
	}

	/*Detail Article*/
	function detail($category_slug,$article_id,$article_slug){
		$this->data['category'] = $this->category_model->where(array('active'=>'Y','slug'=>$category_slug))->get();

		if(empty($this->data['category'])){
			redirect('home','refresh');
		}

		/*Load relate models*/

		$this->data['page_header_title'] = $this->data['category']->name;
		$this->data['page_header_description'] = $this->data['category']->description;

		$this->data['item'] = $this->article_model->with_categories('fields:slug,name','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->with_user()->where(array('active'=>'Y','id'=>$article_id))->get();


		$this->data['nitem'] = $this->article_model->with_categories('fields:id,slug','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->with_user()->where(array('created_at >' => $this->data['item']->created_at))->limit(1)->order_by('created_at','ASC')->fields(array('id','slug','image','title','created_at'))->get();

		$this->data['pitem'] = $this->article_model->with_categories('fields:id,slug','where:`model`=\'article\' AND `categories.slug`=\''.$category_slug.'\'')->where(array('created_at <' => $this->data['item']->created_at))->limit(1)->order_by('created_at','DESC')->fields(array('id','slug','image','title','created_at'))->get();
		$this->data['category_slug'] = $category_slug;


		$this->data['module_solutions'] = $this->solution_model->where(array('active'=>'Y'))->get_all();

		$this->breadcrumbs->push($this->data['category']->name,'/news/'.$category_slug);
		$this->breadcrumbs->push($this->data['item']->title,'/');

		$this->render('default/news/detail_news');
	}

	public function module_news(){
		return $this->data['other_category'] = $this->category_model->where(array('active'=>'Y','model'=>'article'))->get_all();
	}

}
