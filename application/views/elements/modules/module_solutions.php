<?php
	if(!empty($solutions)):
	?>
<div class="widget heading_space">
  <h3 class="bottom20">Sản phẩm & Giải pháp</h3>
  	<?php
	  		foreach($solutions as $k=>$v):
	  			$link = base_url().'solutions/'.$v->slug;
	  	?>
  <div class="media">
    <a class="media-left" href="<?=$link?>">
	    <!--<img src="images/service-deploy.jpg" width=100 alt="post">-->
	    <i class='<?=$v->icon?>' style='font-size:80px;'></i>
	</a>
    <div class="media-body">
      <?=anchor($link,'<h5 class="bottom5">'.$v->name.'</h5>')?>
      <p><?=getSnippet(strip_tags($v->description),20)?></p>
      <?=anchor($link,lang('find out'),array('class'=>'btn-primary border_radius bottom5'))?>
  	</div>
  </div>
  <?php
	  	endforeach;
	  ?>

</div>
  <!-- ./end dịch vụ -->
<?php
	endif;
?>
