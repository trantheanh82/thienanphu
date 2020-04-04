<?php
	if(!empty($home_news)):
	?>
<!-- News-->
<section id="news" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown">
       <h2 class="heading heading_space"><span><?=lang('News')?></span> <span class="divider-left"></span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider_wrapper">
          <div id="news_slider" class="owl-carousel">
	          <?php
		          foreach($home_news as $k => $news):
		          pr($news->category);
		          	$link = base_url().'news/'.reset($news->category)[0]->slug.'/'.$news->id.'-'.$news->slug;
		          ?>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <?=anchor($link,img($news->image,false,array('class'=>"img-responsive border_radius")))?>
                </div>
                <div class="news_box border_radius">
                  <h4><?=anchor($link,$news->title)?></h4>
                  <ul class="commment">
                    <li><i class="icon-icons20"></i><?=date_format(date_create($news->created_at),'d-m-Y')?></li>
                    <!--<li><a href="#."><i class="icon-comment"></i> 02</a></li>-->
                  </ul>
                  <?=getSnippet($news->description,60)?>
                  <?=anchor($link,lang('view more'),array('class'=>'readmore'))?>
                </div>
              </div>
            </div>
            <?php
	            endforeach;
	            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
	endif;
?>