<!--Products & Solutions-->
<section id="about" class="padding">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 text-center">
      <h2 class="heading"><span>Giải pháp</span> <span class="divider-center"></span></h2>
    </div>
    <div class="icon_wrapclearfix">
	    <?php
		    if(isset($items)):
		    	foreach($items as $k=>$i):
		    		$link = base_url().'solutions/'.$i->slug;
		    ?>
      <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="300ms" data-url="<?=$link?>">
         <i class="<?=$i->icon?>"></i>
         <h4 class="text-uppercase bottom20 margin10"><?=lang($i->name)?></h4>
         <p class="no_bottom"><?=getSnippet(strip_tags($i->description),20)?></p>
      </div>
      <?php
	      		endforeach;
	      	endif;
	      ?>
    </div>
    </div>
  </div>
</section>
<!--Products & Solutions-->

<!--Shopping-->
<?=$this->load->view('default/products/products_view',array('products'=>$products,'class'=>""))?>
<div style='padding-bottom:90px;'></div>
<!--Shoping-->

<script>
	$('document').ready(function(){
		$('.icon_box').click(function(){
			link = $(this).attr('data-url');
			window.location.href  = link;
		});
	});
</script>