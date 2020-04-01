<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
	if(!isset($class)){
		$class=" class='padding'";
	}else{
		$class="";
	}
	?>
<section id="shop" <?=$class?>>
  <div class="container">
	  <div class='row'>
	  	<div class="col-sm-12 text-center">
	  		<h2 class="heading"><span>Sản phẩm</span><span class="divider-center"></span></h2>
    	</div>
	  </div>
	  <br /><br />
    <div class="row">
	    
	    <?php
		    	foreach($products as $k=>$p):
		    			
		    ?>
      <div class="col-md-3 col-sm-6 margin10 bottom15 wow fadeIn" data-wow-delay="300ms">
        <?=$this->load->view('elements/modules/module_product_box',array('item'=>$p))?>
      </div>
      <?php
	      	endforeach;
	      ?>
  </div>
</section>