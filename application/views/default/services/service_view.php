<!-- services -->
<section id="course_all" class="padding-bottom">
  <div class="container">
    <div class="row">
	  <?php
		  if(!empty($items)):
		  	foreach($items as $k => $item):
		  ?>
		  <div class="col-sm-6 col-md-4 equalheight">
	        <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
	          <div class="image bottom25">
	            <?=anchor($item->slug,img($item->image,true,array('alt'=>$item->name,'class'=>'border_radius')))?>
	          </div>
	          <h3 class="bottom10">
		          <?=anchor($item->slug,$item->name)?>
		      </h3>
	          <p class="bottom20">
		          <?=getSnippet(strip_tags($item->description),30)?>
	          </p>
	          <?=anchor($item->slug,lang('Find out'),array('class'=>'btn_common yellow border_radius'))?>
	        </div>
	      </div>
		  <?php
			  endforeach;
			  endif;
		  ?>
    </div>
  </div>
</section>
<!-- services ends -->