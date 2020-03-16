<?php 
	if(isset($module_services)):
?>
<!-- Dịch vụ -->
	<div class="widget heading_space">
		<h3 class="bottom20"><?=lang('Services')?></h3>
		<?php
			foreach($module_services as $k=>$service):
			?>
		  <div class="media">
		    
		    <?=anchor('/services/'.$service->slug,img($service->image,true,array('alt'=>$service->name,'width'=>100)),array('class'=>'media-left'))?>		    
			    <div class="media-body">
				  <?=anchor('/services/'.$service->slug,'<h5 class="bottom5">'.$service->name.'</h5>')?>
			      <p><?=getSnippet($service->description,15)?></p>
			      <?=anchor('/services/'.$service->slug,lang('view more'),array('class'=>'btn-primary border_radius bottom5'))?>            
			    </div>
		  </div>
		<?php
			endforeach;
			?>
	</div>
<?php
	endif;
	?>