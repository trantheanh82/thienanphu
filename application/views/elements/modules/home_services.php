<?php
	$column = 4;
	?>
<!-- Service -->
<section id="course_all" class='padding'>
  <div class="container">
    <div class="row">
	    <div class="col-sm-6 col-md-4">
        	<h2 class="heading"><span><?=lang('Services')?></span><span class="divider-left"></span></h2>
      	</div>
      	<div class='col-sm-4 col-md-8'>
      		&nbsp;
      	</div>
    </div>
    <div class="row">
	    <?php
		    if(!empty($home_services)):
		    	foreach($home_services as $k=>$v):
		    	$img = img($v->image,'',array('alt'=>$v->name,'class'=>"border_radius"));
		    	$link = base_url().'services/'.$v->slug;
		    ?>
	  <div class="col-sm-6 col-md-<?=12/$column?> equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
          <div class="image bottom25">
            <?=$img?>
          </div>
          <h3 class="bottom10">
	          <?=anchor($link,$v->name)?>
	      </h3>
          <p class="bottom20"><?=getSnippet(strip_tags($v->description),20)?></p>
          <?=anchor($link,lang('view detail'),array('class'=>"btn_common yellow border_radius"))?>
        </div>
      </div>
      <?php
	      	endforeach;
	      endif;
	      ?>
      
    </div>
  </div>
</section>
<!-- end Service -->