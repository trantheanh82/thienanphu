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
      <div class="col-md-12 wow fadeInDown">
       <h2 class="heading heading_space"> <span>Lịch Sử </span>Hình Thành <span class="divider-left"></span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="300ms">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="image"><img src="images/history1.jpg" alt="our history"></div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h3><span>1991</span> . Structure was Founded</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            occaecat aute irure dolor in reprehenderit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="400ms">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="image"><img src="images/history2.jpg" alt="our history"></div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h3><span>1991</span> . Structure was Founded</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            occaecat aute irure dolor in reprehenderit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="500ms">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="image"><img src="images/history3.jpg" alt="our history"></div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h3><span>1991</span> . Structure was Founded</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            occaecat aute irure dolor in reprehenderit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="600ms">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="image"><img src="images/history4.jpg" alt="our history"></div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h3><span>1991</span> . Structure was Founded</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            occaecat aute irure dolor in reprehenderit.</p>
          </div>
        </div>
      </div>
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