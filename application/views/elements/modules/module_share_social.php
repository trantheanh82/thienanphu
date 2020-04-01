<?php
	if(!isset($class)){
		$class = "share clearfix heading_space";
	}
	?>
<div class="<?=$class?>">
  <p class="pull-left"><strong><?=lang('Share this article:')?></strong></p>
  	<ul class="pull-right">
	    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url(uri_string())?>"><i class="fa fa-facebook"></i></a></li>
	    <li><a href="#."><i class="icon-twitter4"></i></a></li>
	    <li><a href="#."><i class="icon-dribbble5"></i></a></li>
	    <li><a href="#."><i class="icon-instagram"></i></a></li>
	    <li><a href="#."><i class="icon-vimeo4"></i></a></li>
	</ul>
</div>