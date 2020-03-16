<?php
	if(!empty($r_services)):
?>
<!-- services khác -->
<div class="row">
<div class="col-sm-6 col-md-12">
	<h2 class="heading"><span><?=lang('Related Services')?></span><span class="divider-left"> </span></h2>
	</div>
	<div class='col-sm-4 col-md-8'>
		&nbsp;
	</div>
</div>
<div class="row">
	<?php 
		foreach($r_services as $k => $item):
		$link = '/services/'.$item->slug;
	?>
  <div class="col-sm-6 col-md-6 equalheight bottom25" style="height: 494px;">
    <div class="course wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
      <div class="image bottom25">
        <?=anchor($link,img($item->image,false,array('alt'=>$item->name,'class'=>"border_radius")))?>
      </div>
      <h3 class="bottom20">
	      	<?=anchor($link,$item->name)?>
	  </h3>
      <p class="bottom20"><?=getSnippet($item->description,50)?></p>
      <?=anchor($link,$item->name,array('class'=>'btn_common yellow border_radius'))?>
    </div>
  </div>
  <?php
	  endforeach;
	?>
 
</div>
<!-- /end service khác -->
<?php
	endif;
	?>
