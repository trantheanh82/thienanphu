<?php
	if(!empty($home_about)):
	?>
<!-- About Us -->
<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
       <h2 class="heading heading_space"><span><?=$home_about->name?> </span> <span class="divider-left"></span></h2>
       <?=$home_about->description?>
       <?=anchor('pages/'.$home_about->slug,lang('find out'),array('class'=>'btn_common yellow border_radius'))?>
      </div>
      <div class="col-md-5 wow fadeInRight animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
        <div class="image">
            <?php
	         echo img($home_about->image,array('alt'=>$Settings['company_name']));
	         ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Us-->
<?php
	endif;
	?>