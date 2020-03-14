<!--BLOG SECTION-->
<section id="blog" class="padding">
  <div class="container">
    <h2 class="hidden">Our Blog</h2>
    <div class="row">
      <div class="col-md-8">
	      <?php
		    if(empty($items)):
		    else:
		    
		      	foreach($items as $k=>$item):
		      	 $link = '/news/'.$category->slug.'/'.$item->id.'-'.$item->slug;
		      ?>
		      
        <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
          <div class="row">
            <div class="col-md-5 col-sm-5 heading_space">
              <div class="image">
	              <!--<a href="news-detail.html"><img src="images/blog1.jpg" alt="blog" class="border_radius"></a>-->
				  <?=anchor($link,img($item->image,true,array('atl'=>'blog','class'=>'border_raidus')))?>
				</div>
            </div>
            <div class="col-md-7 col-sm-7 heading_space">
	             <?=anchor($link,'<h3>'.$item->id .' '.$item->title.'</h3>')?>
              <ul class="comment margin10">
                <li><a href="news-detail.html"><?=date_format(date_create($item->created_at),'d-m-Y')?></a></li>
              </ul>
              
              <p class="margin10">
	              <?=getSnippet(strip_tags($item->description,"<p>"),60)?> [<?=anchor($link,'...')?>]
              </p>
              <?=anchor($link,lang('view more'),array('class'=>'btn_common btn_border margin10 border_radius'))?>
            </div>
          </div>
        </article>
		<?php
				endforeach;
			endif; //if !empty $items
			?>
        
       <div class="pager_nav wow fadeIn" data-wow-delay="600ms">
          <ul class="pagination">
	        <?php
		        $class="";
		        if($current_page == 1){
		        	$class=" class='hidden'";
		        }
		        ?>  
            <li<?=$class?>>
              <?=anchor('/news/'.$category->slug.'/'.($current_page-1),'<span aria-hidden="true">&laquo;</span>')?>
            </li>
            <?php
	            for($i=1;$i <= $total_pages;$i++):
	            ?>
            <li>
            	<?=anchor('/news/'.$category->slug.'/'.$i,$i)?>
            </li>
            <?php
	            endfor;
	            ?>
	        <?php
		        $class="";
		        if(intval($current_page) >= intval($total_pages)){
			        $class=" class='hidden'";
		        }
		        ?>
            <li<?=$class?>>
	          <?=anchor('/news/'.$category->slug.'/'.($current_page + 1),'<span aria-hidden="true">'.lang('Next').' <i class="fa fa-long-arrow-right"></i></span')?>
            </li>
            
          </ul>
        </div>
        
      </div>
      <!-- end of articles -->
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
                <a href="#."><h5 class="bottom5">Tin công nghệ</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="#."><h5 class="bottom5">Tin hoạt động</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="#."><h5 class="bottom5">Tin sự kiện</h5></a>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <a href="#."><h5 class="bottom5">Góc báo chí</h5></a>
              </div>
            </div>
          </div>
          
          <!-- Dịch vụ -->
          <div class="widget heading_space">
          	<h3 class="bottom20">Dịch vụ</h3>
	          <div class="media">
	            <a class="media-left" href="#."><img src="images/service-deploy.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='#.'><h5 class="bottom5">Cho thuê thiết bị CNTT</h5></a>
	              <p>Cung cấp thiết bị CNTT dài hạn</p>
	              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
	          <div class="media">
	            <a class="media-left" href="#."><img src="images/service-shipping.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='#.'><h5 class="bottom5">DI DỜI HỆ THỐNG CNTT</h5></a>
	              <p>Vận chuyển cơ sở hạ tầng CNTT</p>
	              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
	          <div class="media">
	            <a class="media-left" href="#."><img src="images/service-guarantee.jpg" width=100 alt="post"></a>
	            <div class="media-body">
	              <a href='#.'><h5 class="bottom5">QUẢN TRỊ & VẬN HÀNH HỆ THỐNG CNTT</h5></a>
	              <p>Cung cấp thiết bị CNTT dài hạn</p>
	              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
	          </div>
        </div>
        
        <div class="widget heading_space">
          <h3 class="bottom20">Sản phẩm & Giải pháp</h3>
          <div class="media">
            <a class="media-left" href="#."><img src="images/service-deploy.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href='#.'><h5 class="bottom5">Phần mềm tích hợp</h5></a>
              <p>Cung cấp thiết bị CNTT dài hạn</p>
              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
          </div>
          <div class="media">
            <a class="media-left" href="#."><img src="images/service-shipping.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href='#.'><h5 class="bottom5">Giải pháp Bảo mật</h5></a>
              <p>Vận chuyển cơ sở hạ tầng CNTT</p>
              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
          </div>
          <div class="media">
            <a class="media-left" href="#."><img src="images/service-guarantee.jpg" width=100 alt="post"></a>
            <div class="media-body">
              <a href='#.'><h5 class="bottom5">Giải pháp Dữ liệu</h5></a>
              <p>Cung cấp thiết bị CNTT dài hạn</p>
              <a href="#." class="btn-primary border_radius bottom5">chi tiết</a>            </div>
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