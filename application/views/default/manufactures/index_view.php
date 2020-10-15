<?php
	if(isset($item->image)){
		$title = img($item->image,'',array('style'=>'max-height:100px'));
	}else{
		$title = $item->name;
	}
	?>
<section id="shop" class="padding">
	<div class='container'>
		<div class='row'>
	  	<div class="col-sm-12 text-center">
	  		<h2 class="heading">
		  		 <span><?=$title?></span><span class="divider-center"></span></h2>
    	</div>
	  </div>
	  <br /><br />
    <div class="row">
	    <?php
				if(!empty($item->products)):
		    foreach($item->products as $k=>$v):
		    ?>
	      <div class="col-md-3 col-sm-6 margin10 bottom15 wow fadeIn animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
	        <?=$this->load->view('elements/modules/module_product_box',array('item'=>$v))?>
	      </div>
      <?php
	      endforeach;
			else:
	      ?>
				<div class="col-md-3 col-sm-6 margin10 bottom15 wow fadeIn animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
						<p class='text-center'>
							Sản phẩm đang cập nhật
						</p>
				</div>
				<?php
			endif;
				?>
  </div>
	</div>
</section>
