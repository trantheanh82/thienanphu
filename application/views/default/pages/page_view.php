<!--Page View-->
<section id="blog" class="padding-bottom-half padding-top">
 <h3 class="hidden">hidden</h3>
 <div class="container">
     <div class="row">
      <div class="wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
        <article class="blog_item padding-bottom-half heading_space">
	        <?php 
		        if(!empty($item->image)):?>
          <div class="image bottom25">
            <?=img($item->image,false,array('alt'=>$item->name))?>
          </div>
          <?php
	          endif;
	          ?>
          <?=$item->content?>
            
        </article>
        <?=$this->load->view('elements/modules/module_share_social')?>
        
    </div>
  </div>
</section>