<?php
	
	echo Modules::run('sliders/sliders/sliders');
	
	$this->load->view('elements/modules/home_about',array('home_about'=>""));
	
	$this->load->view('elements/modules/home_parallax',array('background_image'=>'blink-edited.jpg'));
	
	$this->load->view('elements/modules/home_product_solution',array('products_solutions'=>""));
	
	$this->load->view('elements/modules/home_parallax',array('background_image'=>'blink-edited.jpg'));
	
	$this->load->view('elements/modules/home_services',array('home_services'=>""));
	
	$this->load->view('elements/modules/home_funfact',array('funcfact'=>""));
	
	$this->load->view('elements/modules/home_news',array('home_news'=>$home_article));
?>