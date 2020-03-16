<?php
	if(!empty($categories)):
	?>
<div class="widget heading_space">
    <h3 class="bottom20"><?=lang('Other Categories')?></h3>
    <?php
	    
	    	foreach($categories as $k => $cat):
	    ?>
    <div class="media">
      <div class="media-body">
	      <?=anchor('/news/'.$cat->slug,'<h5 class="bottom5">'.$cat->name.'</h5>');?>
      </div>
    </div>
    <?php
	    	endforeach;
	    ?>
</div>
<?php
	endif;
?>