  <div class="related_pro padding-top clearfix">
    <div class="col-md-12 wow fadeInDown"><h2 class="heading"><?=lang("Related Products")?><span class="divider-left"></span></h2></div>
    <?php
	    $i = 300;
	    foreach($product_related as $k=>$v):
	    ?>
    <div class="col-md-3 col-sm-6 margin_tophalf wow fadeIn" data-wow-delay="<?=$i?>ms">
   
    <?=$this->load->view('elements/modules/module_product_box',array('item'=>$v)); ?>   
  </div>
  <?php
	  $i += 100;
	  endforeach;
	  ?>
</div>
