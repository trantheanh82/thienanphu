<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!--Product SECTION-->
<section id="shop" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="400ms">
        <div class="image">
          <?php
	          if(!empty($item->images)):
	          echo img('assets/upload/product/medium/'.$item->images[0]['name'],'',array('class'=>"img-responsive border-radius","id"=>"product_image"));
	          endif;
	          ?>
          <div class="overlay border-radius text-center"></div>
        </div>
        <?php
	        if(!empty($item->images)):
	        ?>
        <div class='product_images owl-carousel owl-theme top10'>
	        <?php
		        foreach($item->images as $k=>$i):
		        ?>
		        <div class='item' style="cursor:pointer" data-image="<?=base_url().'assets/upload/product/medium/'.$i['name']?>"><?=img('assets/upload/product/thumbnail/'.$i['name'],false)?></div>
		    <?php
			    endforeach;
			    ?>
        </div>
        <?php
	        endif;
	        ?>
      </div>
      <div class="col-md-7 col-sm-7 shop_info wow fadeInRight" data-wow-delay="400ms">
        
        
        <h2 class="heading bottom15">
	    <span><?=$item->name?></span><span class="divider-left"></span></h2>
	    <h4 class="price_product bottom25"><?=lang('Code')?>: <?=$item->code?></h4>
	    <h4 class="infomation"><?=lang('General Information')?></h4>
        <br />
        <?=$item->description?>
		<p class='bottom25'></p>
        <div class="quote bottom25">
        <!--<input type="text" placeholder="1" class="quote border-radius">-->
        <a href="#." class="btn_common yellow border_radius"><?=lang("Hotline").": ".$Settings['company_phone_1']?></a>
        </div>
        <p class="tag_cate half_space"><?=lang('Cateogry')?>: 
        	<?=isset($item->manufacture->name)?anchor('manufactures/'.$item->manufacture->slug,$item->manufacture->name):""?>, 
        	<?=isset($item->solution->name)?anchor('solutions/'.$item->solution->slug,$item->solution->name):""?>, 
        	<?=isset($item->product_type->name)?$item->product_type->name:""?></p>
        <?=$this->load->view('elements/modules/module_share_social',array('class'=>'share clearfix'))?>
      </div>
      </div>
     <div class="row"> 
    <div class="col-md-12 wow fadeInUp" data-wow-delay="300ms">
      <div class="shop_tab margin_top">
        <ul class="tabs">
          <li class="active" rel="tab1"><?=lang('Information Detail')?></li>
          <li rel="tab2"><?=lang('Specifications')?></li>
        </ul>
        <div class="tab_container">
          <div id="tab1" class="tab_content">
            <?=$item->content?>
          </div>
          <div id="tab2" class="tab_content">
            <h3 class="heading bottom25">Technical Details<span class="divider-left"></span></h3>
            <div class="row">
              <?=$item->specification?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
	<?php echo $this->load->view('elements/modules/module_product_related',array('product_related'=>$items_related))?>
</div>
  </div>
</section>
<script>
	$(document).ready(function(){
		$('.product_images').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			items:5,
			navText:["< next >","< previous >"],
			touchDrag: true,
			lazyLoad: true,
			responsive:{
		        600:{
		            items:4
		        }
		    }
		});	
		
		$('.product_images .item').click(function(){
			console.log('clicked');
			var image = $(this).attr('data-image');
			$('#product_image').attr('src',image);
				
		})
	});
</script>
		