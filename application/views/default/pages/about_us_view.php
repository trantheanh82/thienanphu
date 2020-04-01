<!--ABout US-->
<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
       <h2 class="heading heading_space"><span><?=$item->name?> </span><span class="divider-left"></span></h2>
       
       <?=$item->content?>
       </div>
      <div class="col-md-5 wow fadeInRight animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
        <div class="image">
         <?=img($item->image,false,array('alt'=>$Settings['company_name']))?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--ABout US-->

<!-- Company History -->
<section id="history" class="padding bg_grey">
  <div class="container">
    <div class="row">
      <?=$item->content_1?>
    </div>
  </div>
</section>
<!-- Company History -->


<!--Fun Facts-->
<section id="counter" class="parallax padding">
  <div class="container">
    <h2 class="hidden">hidden</h2>
    <div class="row number-counters">
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="300ms">
        <i class="icon-layers"></i>
        <strong data-to="100">0</strong>
        <p>Đối Tác</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="400ms">
        <i class="icon-trophy"></i>
        <strong data-to="10">0</strong>
        <p>Giải Thưởng</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="500ms">
        <i class=" icon-icons20"></i>
        <strong data-to="186">0</strong>
        <p>Thời Gian Làm Việc / Tháng</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="600ms">
        <i class="icon-happy"></i>
        <strong data-to="89">0</strong>
        <p>Khách Hàng Hài Lòng</p>
      </div>
    </div>
  </div>
</section>
<!--Fun Facts-->

<section id="tours" class="bg_grey padding">
  <div class="container tour_media">
    <div class="row">
    	<?php echo $item->content_2?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="projects" class="cbp cbp-caption-active cbp-caption-pushTop cbp-ready" style="height: 170px;"><div class="cbp-wrapper-outer"><div class="cbp-wrapper">
        <div class="cbp-item" style="width: 218px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
          <img src="images/tour1.jpg" alt="">
          <div class="overlay">
          <div class="centered text-center">
            <a href="images/tour1.jpg" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a> 
          </div>
        </div>   
        </div></div>
        <div class="cbp-item" style="width: 218px; left: 238px; top: 0px;"><div class="cbp-item-wrapper">
          <img src="images/tour2.jpg" alt="">
          <div class="overlay">
          <div class="centered text-center">
            <a href="images/tour2.jpg" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a> 
          </div>
        </div>
        </div></div>
        <div class="cbp-item" style="width: 218px; left: 476px; top: 0px;"><div class="cbp-item-wrapper">
          <img src="images/tour3.jpg" alt="">
          <div class="overlay">
          <div class="centered text-center">
            <a href="images/tour3.jpg" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a> 
          </div>
        </div>
        </div></div>
        <div class="cbp-item" style="width: 218px; left: 714px; top: 0px;"><div class="cbp-item-wrapper">
          <img src="images/tour4.jpg" alt="">
          <div class="overlay">
          <div class="centered text-center">
            <a href="images/tour4.jpg" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a> 
          </div>
        </div>
        </div></div>
        <div class="cbp-item" style="width: 218px; left: 952px; top: 0px;"><div class="cbp-item-wrapper">
          <img src="images/tour5.jpg" alt="">
          <div class="overlay">
          <div class="centered text-center">
            <a href="images/tour5.jpg" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a> 
          </div>
        </div>
        </div></div>
      </div></div></div>
    </div>
  </div>
</section>