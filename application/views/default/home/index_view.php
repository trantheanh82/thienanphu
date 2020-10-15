<?php

	echo Modules::run('sliders/sliders');

	$this->load->view('elements/modules/home_about',array('home_about'=>$home_about));

	$this->load->view('elements/modules/home_parallax',array('background_image'=>'blink-edited.jpg'));

	$this->load->view('elements/modules/home_solutions',array('home_solutions'=>$home_solutions));

	$this->load->view('elements/modules/home_parallax',array('background_image'=>'blink-edited.jpg'));

	$this->load->view('elements/modules/home_services',array('home_services'=>$home_services));

	$this->load->view('elements/modules/home_funfact',array('funcfact'=>""));

	$this->load->view('elements/modules/home_news',array('home_news'=>$home_article));
?>
