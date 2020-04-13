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
		      	 $img = img(base_url().$item->image,'',array('atl'=>'blog','class'=>'border_raidus'));
		      ?>
		      
        <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
          <div class="row">
            <div class="col-md-5 col-sm-5 heading_space">
              <div class="image">
	              <!--<a href="news-detail.html"><img src="images/blog1.jpg" alt="blog" class="border_radius"></a>-->
				  <?=anchor($link,$img)?>
				</div>
            </div>
            <div class="col-md-7 col-sm-7 heading_space">
	             <?=anchor($link,'<h3>'.$item->title.'</h3>')?>
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
          <?php //$this->load->view('elements/modules/module_search')?>
          
          <?=$this->load->view('elements/modules/module_news_categories',array('categories'=>$other_category))?>
          
          <?=$this->load->view('elements/modules/module_services',array('module_services'=>$module_services))?>
		  
		  <?=$this->load->view('elements/modules/module_solutions',array('solutions'=>$module_solutions))?>
		  
          <?php //$this->load->view('elements/modules/module_tags')?>
        </aside>
      </div>
    </div>
  </div>
</section>
<!--BLOG SECTION-->