<?php
	if(empty($item->images)){
		$image = img('assets/upload/product/product_default.jpg',false,array('alt'=>$item->name,'class'=>'img-responsive border-radius'));
	}else{
		$image = img('assets/upload/product/medium/'.$item->images['name'],false,array('alt'=>$item->name,'class'=>'img-responsive border-radius'));
	}
	
	$link = 'products/'.$item->slug;
?>
<div class="shopping_box">
  <div class="image">
    <?=anchor($link,$image,array('class'=>'img-responsive border-radius'))?>
    <div class="overlay border_radius">
    </div>
  </div>
  <div class="shop_content text-center">
    <h4>
	    <?=anchor($link,$item->name,array('class'=>'title_link'))?>
	</h4>
    <p><?=getSnippet($item->description,5)?></p>
    <h4 class="price_product"></h4>
  </div>
</div>