<!--BLOG SECTION-->
<section id="blog" class="padding">
  <div class="container">
    <h2 class="hidden">Our Blog</h2>
    <div class="row">
      <div class="col-md-8 col-sm-8 wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
        <article class="blog_item padding-bottom-half heading_space">
          <div class="image bottom25">
            <?=img($item->image,true,array('alt'=>$item->title))?>
          </div>
          <h3><?=$item->title?></h3>
          <ul class="comment margin10">
            <li>
            	<?=anchor('/',date_format(date_create($item->created_at),'d-m-Y'))?>
            </li>
            <!--<li><a href="#."><i class="icon-comment"></i> 5</a></li>-->
          </ul>
          <?=$item->content?>
            
        </article>
        <div class="share clearfix heading_space">
          <p class="pull-left"><strong>Chia sẻ bài viết này:</strong></p>
          <ul class="pull-right">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url(uri_string());?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="icon-twitter4"></i></a></li>
            <!--<li><a href="#."><i class="icon-dribbble5"></i></a></li>-->
            <li><a href="#."><i class="icon-instagram"></i></a></li>
           <!-- <li><a href="#."><i class="icon-vimeo4"></i></a></li>-->
        </ul>
        </div>
        <div class="row">
	        <div class="col-md-6">
		        <?php
			        if(!empty($pitem)):
			        ?>
	        <article class="blog_newest text-left heading_space border_radius">
	          <h2 class="hidden">Chia sẻ:</h2>
	          <span class="post_img">
	          	<?=img($pitem->image,true,array('alt'=>$pitem->title,'width'=>'100'))?>
	          </span>
	          <div class="text">
	          <i class="link"><?=lang('Previous')?></i>
	          <?php
		          echo anchor('/news/'.$category_slug.'/'.$pitem->id.'-'.$pitem->slug,getSnippet($pitem->title,10).' ...',array('class'=>'post_title'))?>
	          </div>
	          </article>
	          <?php 
		          endif;
		          ?>
	        </div>
	        <div class="col-md-6">
		        <?php
			        if(!empty($nitem)):
			        ?>
		        <article class="blog_newest text-right heading_space border_radius">
		          <h2 class="hidden">Chia sẻ:</h2>
		          <div class="text">
		          <i class="link"><?=lang('Next')?></i>
		          <?php
		          echo anchor('/news/'.$category_slug.'/'.$nitem->id.'-'.$nitem->slug,getSnippet($nitem->title,10).' ...',array('class'=>'post_title'))?>
		          </div>
		          <span class="post_img">
		          	<?=img($nitem->image,true,array('alt'=>$nitem->title,'width'=>'100'))?>
		          </span>

		          </article>
		          <?php
			          endif;
			          ?>
	        </div>
        </div>  
      </div>
      <div class="col-md-4	">
        <aside class="sidebar bg_grey border-radius wow fadeIn" data-wow-delay="300ms">
          <div class="widget heading_space">
            <form class="widget_search border-radius">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Tìm kiếm" required>
                <i class="input-group-addon icon-icons185"></i>
              </div>
            </form>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Tin tức khác</h3>
            <div class="media">
              <div class="media-body">
                <a href="news.html"><h5 class="bottom5">Tin công nghệ</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="news.html"><h5 class="bottom5">Tin hoạt động</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="news.html"><h5 class="bottom5">Tin sự kiện</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="news.html"><h5 class="bottom5">Góc báo chí</h5></a>
              </div>
            </div>
          </div>
          
          <!-- Dịch vụ -->
          <div class="widget heading_space">
          	<h3 class="bottom20">Dịch vụ</h3>
	          <div class="media">
	            <a class="media-left" href="services.html"><img src="images/service-deploy.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='services.html'><h5 class="bottom5">Cho thuê thiết bị CNTT</h5></a>
	              <p>Cung cấp thiết bị CNTT dài hạn</p>
	              <a href="services.html" class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
	          <div class="media">
	            <a class="media-left" href="services.html"><img src="images/service-shipping.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='services.html'><h5 class="bottom5">DI DỜI HỆ THỐNG CNTT</h5></a>
	              <p>Vận chuyển cơ sở hạ tầng CNTT</p>
	              <a href="services.html" class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
	          <div class="media">
	            <a class="media-left" href="services.html"><img src="images/service-guarantee.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='services.html'><h5 class="bottom5">QUẢN TRỊ & VẬN HÀNH HỆ THỐNG CNTT</h5></a>
	              <p>Cung cấp thiết bị CNTT dài hạn</p>
	              <a href="services.html" class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
        </div>
        
        <div class="widget heading_space">
          <h3 class="bottom20">Sản phẩm & Giải pháp</h3>
          <div class="media">
            <a class="media-left" href="services.html"><img src="images/service-deploy.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href="services.html"><h5 class="bottom5">Phần mềm tích hợp</h5></a>
              <p>Cung cấp thiết bị CNTT dài hạn</p>
              <a href="services.html" class="btn-primary border_radius bottom5">chi tiết</a>            </div>
          </div>
          <div class="media">
            <a class="media-left" href="services.html"><img src="images/service-shipping.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href="services.html"><h5 class="bottom5">Giải pháp Bảo mật</h5></a>
              <p>Vận chuyển cơ sở hạ tầng CNTT</p>
              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
          </div>
          <div class="media">
            <a class="media-left" href="services.html"><img src="images/service-guarantee.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href='services.html'><h5 class="bottom5">Giải pháp Dữ liệu</h5></a>
              <p>Cung cấp thiết bị CNTT dài hạn</p>
              <a href="services.html" class="btn-primary border_radius bottom5">chi tiết</a>            </div>
          </div>
        </div>

          <!-- ./end dịch vụ -->
          
          <div class="widget heading_space">
            <h3 class="bottom20">Top Tags</h3>
            <ul class="tags">
              <li><a href="#.">Books</a></li>
              <li><a href="#.">Midterm test </a></li>
              <li><a href="#.">Presentation</a></li>
              <li><a href="#.">Courses</a></li>
              <li><a href="#.">Certifications</a></li>
              <li><a href="#.">Teachers</a></li>
              <li><a href="#.">Student Life</a></li>
              <li><a href="#.">Study</a></li>
              <li><a href="#.">Midterm test </a></li>
              <li><a href="#.">Presentation</a></li>
              <li><a href="#.">Courses</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
<!--BLOG SECTION-->