<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
	$is_home = ($this->router->fetch_class() == "home");
	?>
<!DOCTYPE html>
<html lang="<?=$current_lang['language_code']?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php 
	$title = $Settings['company_name'];
	
	if(isset($page_title)){
		echo $page_title .":". $title;
	}else if(isset($item->translation[0]->page_title)){
		echo $item->translation[0]->page_title.": ".$title;
	}else{
		echo $title;
	}
?></title>
	<?php
	/*Meta keywords and description*/
	$keywords = $Settings['keywords'];
	$description = $Settings['description'];
	if(isset($item->keywords)){
		$keywords = $item->keywords;
	}
	
	if(isset($item->description)){
		$description = $item->description;
	}
		
	if(isset($item->image)){
		$og_image = $item->image;
	}else{
		$og_image = base_url().'assets/images/bg/';
	}	
	
	echo "
	<!-- meta tag -->
	<meta name='keywords' content='".$keywords."' />
	<meta name='description' content='".$description."' />";
	
	$url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

	$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
	echo "
	<!-- Facebook -->
	
	<!-- meta og:title -->
	<meta property='og:title' content='".$title."' />
	    
	<!-- meta og:description -->
	<meta property='og:description' content='".$description."' />
	
	<!-- meta og:image -->
	<meta property='og:image' content='".$og_image."' />
	<meta property='og:image:alt' content='".$title."' />	 
	
	<!-- meta og:url -->
	<meta property='og:url' content='".$escaped_url."' />	
	
	<meta property='og:type' content='article'> 
		 
		 ";  
		    
	?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <!-- favicon
    ============================================ -->		
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico')?>">
    
    <!-- Google Fonts
    ============================================ -->		
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet"> 
    
    <!-- All css files are included here
    ============================================ -->    
    <!-- Bootstrap CSS
    ============================================ -->		
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"> 
    
    <!-- icon font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/Xwin-icons.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.transitions.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cubeportfolio.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/settings.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootsnav.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

    <?php 
		echo $css_for_elements;
		echo $before_head;
	?>   
		
</head>
<body class="pushmenu-push">
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="spinner centered">
  <div class="spinner-container container1">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container2">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
</div>
</div>

<?php
	if(!$is_home) {
		echo $this->load->view('elements/modules/top_bar');
		}
	?>
<!--Header-->
<header<?=$is_home?' id="boxed"':''?>>

<?php echo $this->load->view('elements/modules/mega_menu',array('is_home'=>$is_home));
	?>
</header>	

<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common yellow"><?=__('Search',$this)?></button>
  </form>
</div>

<?php
	
	if($this->router->fetch_class() != "home"){
		
		echo $this->load->view('elements/modules/page_header',array('page_header_title'=>$page_header_title));
	}
	?>
	