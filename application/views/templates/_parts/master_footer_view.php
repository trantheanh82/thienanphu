<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Về Thiên An Phú<span class="divider-left"></span></h3>
        <a href="index3.html" class="footer_logo bottom25"><?=img($Settings['company_logo_footer'],array('alt'=>$Settings['company_name']))?></a>
        <p><?=$Settings['description']?></p>
        <ul class="social_icon top25">
          <li><a href="<?=$Settings['social_facebook']?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
         <!-- <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>-->
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Liên kết<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="#."><i class="icon-chevron-small-right"></i>Trang chủ</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Giới thiệu</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Dịch vụ</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Đội ngũ</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Sản phẩm - Giải pháp</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Chứng nhận</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Tin tức</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Chính sách khách hàng</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Liên hệ</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Trự Sở <span class="divider-left"></span></h3>
        <p class=" address"><i class="icon-map-pin"></i><?=$Settings['address']?></p>
        <p class=" address"><i class="icon-phone"></i><?=$Settings['company_phone_1'].(!empty($Settings['company_phone_2'])?" - ".$Settings['company_phone_2']:"")?></p>
        <p class=" address"><i class="icon-envelope"></i>
				<?=mailto($Settings['company_email'],$Settings['company_email'])?>
	       </p>
        <?=img('/assets/img/footer-map-new.png',false,array('alt'=>$Settings['company_name'],'class'=>'img-responsive'))?>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Bản quyền &copy; 2020 <a href="#."><?=$Settings['company_name']?></a></p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->

        
    <!-- jquery latest version
	========================================================= -->	
    <script src="<?php echo base_url('assets/js/jquery-2.2.3.js')?>"></script>
    
    <!-- Bootstrap framework js
	========================================================= -->			
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/js/bootsnav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.appear.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-countTo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.parallax-1.1.3.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.cubeportfolio.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.matchHeight-min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.themepunch.tools.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.themepunch.revolution.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/revolution.extension.layeranimation.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/revolution.extension.navigation.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/revolution.extension.parallax.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/revolution.extension.slideanims.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/revolution.extension.video.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/functions.js')?>"></script>
    
   
    
    <!-- Google Map js
	============================================ --> 		
    
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script>
		function initialize() {
		  var mapOptions = {
			zoom: 13,
			scrollwheel: false,
			center: new google.maps.LatLng(10.410212, 106.920839),
			mapTypeId: "satellite"
		  };

		  var map = new google.maps.Map(document.getElementById('googleMap'),
			  mapOptions);


		  var marker = new google.maps.Marker({
			position: map.getCenter(),
			animation:google.maps.Animation.BOUNCE,
			icon: 'images/map-marker.png',
			map: map
		  });
            
		}
            
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>-->
    
    <?php echo $before_body;?>
    </body>
</html>