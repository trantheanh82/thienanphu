<!- Contact Section -->
<section id="contact" class="padding">
  <div class="container">
    <div class="row padding-bottom">
      <div class="col-md-4 contact_address heading_space wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
        <h2 class="heading heading_space"><span>Thông tin</span> Công Ty <span class="divider-left"></span></h2>
        <?=$item->content?>
        <?php
	        if(!empty($Settings['company_address_1'])):
	        ?>
        <div class="address">
          <i class="icon icon-map-pin border_radius"></i>
          <h4><?=lang('company address')?></h4>
          <p><?=anchor("https://www.google.com/maps/search/".$Settings['company_address_1'],$Settings['company_address_1'],array('target'=>'_blank'))?></p>
        </div>
        <?php
	        endif;
	        ?>
	    <?php
	        if(!empty($Settings['company_address_2'])):
	        ?>
        <div class="address second">
          <i class="icon icon-map-pin border_radius"></i>
          <h4><?=lang('company_address_2')?></h4>
          <p><?=$Settings['company_address_2']?></p>
        </div>
        <?php
	        endif;
	        ?>
	     <?php
		     if(!empty($Settings['company_email'])):
		     ?> 
        <div class="address second">
          <i class="icon icon-envelope border_radius"></i>
          <h4><?=lang('Email')?></h4>
          <p><?=mailto($Settings['company_email'],$Settings['company_email'])?></p>
        </div>
        <?php
	        endif;
	        ?>
	    <?php
		    if(!empty($Settings['company_phone_1'])):
		    ?>
        <div class="address">
          <i class="icon icon-phone4 border_radius"></i>
          <h4><?=lang('Phone')?></h4>
          <p><?=$Settings['company_phone_1']?><?=(!empty($Settings['company_phone_2'])? ' - '.$Settings['company_phone_2']:"")?></p>
        </div>
      </div>
      <?php
	      endif;
	      ?>
      <div class="col-md-8 wow fadeInRight animated" data-wow-delay="1000ms" style="visibility: visible; animation-delay: 4500ms; animation-name: fadeInRight;">
        <h2 class="heading heading_space"> <span>Thông tin</span> Liên Hệ<span class="divider-left"></span></h2>
        
        <form class="form-inline findus" action="<?=base_url(uri_string());?>" id="contact-form" onsubmit="return false" method="post">
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?=lang('Name')?>" name="name" id="name" required="">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="<?=lang('Email')?>" name="email" id="email"  required="">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?=lang('Phone')?>" name="phone" id="phone"  required="">
              </div>
            </div>
            <div class="col-md-12">
              <textarea placeholder="<?=lang("Contact message")?>" name="message" id="message"></textarea>
              <button class="btn_common yellow border_radius" id="btn_submit"><?=lang('Send')?></button>
            </div>
          </div>
        </form>
        
        <ul class="social_icon black top30">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row wow bounceIn" data-wow-delay="300ms">
      <div class="col-md-12">
        <!--<div id="map"></div>-->
        <?=anchor("https://www.google.com/maps/place/Khu+c%C4%83n+h%E1%BB%99+cao+%E1%BB%91c+Ph%C3%BA+Ho%C3%A0ng+Anh+1/@10.7168673,106.7036746,17z/data=!4m5!3m4!1s0x31752fe91361f00f:0xaf391795df3bfa97!8m2!3d10.7167197!4d106.7038033",img('assets/img/thienanphu-map.gif',false,array('alt'=>"Địa chỉ công ty Thiên An Phú",'class'=>"img-responsive")),array('target'=>'_blank')) ?>
      </div>
    </div>
  </div>
</section>
<!-- ./end Contact Section -->
<script>
	$(document).ready(function(){
		if ($("#map").length) {
		    var map;
		    map = new GMaps({
		      el: '#map',
		      lat: <?=$Settings['company_latitude']?>,
		      lng: <?=$Settings['company_longitude']?>
		    });
		    map.drawOverlay({
		      lat: map.getCenter().lat(),
		      lng: map.getCenter().lng(),
		      layer: 'overlayLayer',
		      content: '<div class="overlay_map"><i class="icon-location-pin"></i></div>',
		      verticalAlign: 'top',
		      horizontalAlign: 'center'
		    });
		
		  }
	});
	</script>
