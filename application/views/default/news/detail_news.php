<!--BLOG SECTION-->
<section id="blog" class="padding">
  <div class="container">
    <h2 class="hidden">Our Blog</h2>
    <div class="row">
      <div class="col-md-8 col-sm-8 wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
        <article class="blog_item padding-bottom-half heading_space">
          <div class="image bottom25">
            <?=img(base_url().$item->image,true,array('alt'=>$item->title))?>
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
        <?=$this->load->view('elements/modules/module_share_social',array('class'=>"share clearfix heading_space"))?>
        <div class="row">
	        <div class="col-md-6">
		        <?php
			        if(!empty($pitem)):
			        ?>
	        <article class="blog_newest text-left heading_space border_radius">
	          <h2 class="hidden">Chia sẻ:</h2>
	          <span class="post_img">
	          	<?=img(base_url().$pitem->image,true,array('alt'=>$pitem->title,'width'=>'100'))?>
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
		          echo anchor('/news/'.$category_slug.'/'.$nitem->id.'-'.$nitem->slug,getSnippet(strip_tags($nitem->title),10).' ...',array('class'=>'post_title'))?>
		          </div>
		          <span class="post_img">
		          	<?=img(base_url().$nitem->image,true,array('alt'=>$nitem->title,'width'=>'100'))?>
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
