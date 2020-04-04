<?php
	if(isset($home_solutions)):
	?>
<!--Products & Solutions-->
<section id="about" class="padding">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 text-center">
      <h2 class="heading"><span>Sản phẩm</span> - Giải pháp <span class="divider-center"></span></h2>
    </div>

    <div class="icon_wrapclearfix">
	        <?php
	    	foreach($home_solutions as $k=>$v):
	    		$link = base_url().'solutions/'.$v->slug;
	    ?>
      <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="300ms" data-url="<?=$link?>">
         <i class="<?=$v->icon?>"></i>
         <h4 class="text-uppercase bottom20 margin10"><?=$v->name?></h4>
         <p class="no_bottom"><?=getSnippet(strip_tags($v->description),15)?></p>
      </div>
      <?php
	      endforeach;
	      ?>
      </div>
    </div>
  </div>
</section>
<!--Products & Solutions-->
<?php
	endif;
	?>
<script>
	$(document).ready(function(){
		$('.icon_box').click(function(){
			window.location.href = $(this).attr('data-url');
			});	
	});
	</script>