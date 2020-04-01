<?php
	$column = 3;
	?>
<ul class="dropdown-menu megamenu-content animated fadeOut" role="menu" style="border-top: 1px solid rgb(165, 0, 33); display: none; opacity: 1;">
	            <li class="col-md-3">
		            <div class="row">
			            <div class="col-menu col-md-12">
			            	<h6 class="title">Giải pháp công nghệ</h6>
			            	<div class="content">
				            	<div class="image">
							         <?=img("assets/img/giai-phap-cong-nghe.jpg")?>
							    </div>
							    <p style="text-align:justify;"><?=$menu_items[0]->description?></p>
			            	</div>
			            </div>
		            </div>
	            </li>
              <li class="col-md-9">
              <?php
	              for($i=0;$i<count($menu_items);$i++):
	              	if($i==0 || (($i+1)%$column) == 0){
		              	echo '<div class="row">';
	              	}
	              ?>
                  <div class="col-menu col-md-<?=12/$column?>" style="margin-bottom:30px;">
                    <h6 class="title"><i class="<?=$menu_items[$i]->icon?>"></i>&nbsp;&nbsp;<?=anchor(base_url().'solutions/'.$menu_items[$i]->slug,$menu_items[$i]->name)?></h6>
                    <div class="content">
                      <ul class="menu-col">
	                      <?php
		                      foreach($menu_items[$i]->products as $k=>$v):
		                      ?>
                        <li>
                        	<?=anchor(base_url().'products/'.$v->slug,getSnippet($v->name,5))?>
                        </li>
                        <?php
	                        endforeach;
	                        ?>
                      </ul>
                    </div>
                  </div>
	              
	          <?php
		          	if((($i+1)%$column)==0){
			          	echo '</div>';
		          	}
		          endfor;
		          ?>
                
                  
              </li>
            </ul>