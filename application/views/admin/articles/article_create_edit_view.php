<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$this->load->view('admin/elements/section_header_view');
	
?>
<?=content_open($page_name,$this)?>
<form class="form-horizontal" role="form" action="<?=site_url('admin/articles/submit')?>" method="post" id='main_form_submit'>
<?php
	echo form_hidden("id",value(isset($item->id)?$item->id:""));
	$link_redirect = (empty($_SERVER['HTTP_REFERER'])?"/admin/articles/":$_SERVER['HTTP_REFERER']);
	echo form_hidden("link_redirect",$link_redirect);
?>
	<div class='box-body'>
		<!-- ./col left -->
		<div class='col-sm-9 border-right-3d'>
			<div class='form-group'>
                    <!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=lang("Title")?>">-->
                    <?=form_input('title',value(isset($item->title)?$item->title:""),array('id'=>'title','class'=>'form-control make_slug','placeholder'=>lang("Title")))?>
			</div>
            
            <div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Slug")?></label>
				<div class="">
	                   <!-- <input type="input" name='slug' class="form-control slug" id="slug" placeholder="<?=lang("Slug")?>">-->
	                    <?=form_input('slug',value(isset($item->slug)?$item->slug:""),array('class'=>'form-control slug','id'=>'slug','placeholder'=>lang("Slug")))?>
	            </div>
			</div>
			
			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Description")?></label>
				<div class="">
					<?php echo form_textarea('description',value(isset($item->description)?$item->description:""),array('class'=>'form-control basic-editor','id'=>'description','contenteditable'=>true));?>
	            </div>
			</div>
            
            <div class='form-group'>
				<?php echo form_textarea('content',value(isset($item->content)?$item->content:""),array('class'=>'form-control article-editor','id'=>'article','contenteditable'=>true,'style'=>'width:100%;border:1px solid #333'));?>
            </div>
            
            <!-- Meta tags -->
            <hr />
            <div class="">
            	<h3><?=lang('Meta Tags')?></h3>
            </div>
            
            <div class='form-group'>
				<label for="input" class="control-label"><?=lang("Meta title")?></label>
				<div class="">
	                   <!-- <input type="input" name='slug' class="form-control slug" id="slug" placeholder="<?=lang("Slug")?>">-->
	                    <?=form_input('meta_title',value(isset($item->meta_title)?$item->meta_title:""),array('class'=>'form-control','id'=>'meta_title','placeholder'=>lang("meta title")))?>
	            </div>
			</div>
			
			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Meta description")?></label>
				<div class="">
					<?php echo form_textarea('meta_description',value(isset($item->meta_description)?$item->meta_description:""),array('class'=>'form-control','id'=>'meta_description'));?>
	            </div>
			</div>
			<!-- Meta tags -->
            
		</div>
		<!-- ./col right -->
		<div class='col-sm-3'>
			
			<div class="form-group">
				<label for="inputEmail3" class="control-label"><?=lang("Status")?></label>
	          <div class="checkbox">
	            <label>
	              <?php
	              echo form_hidden('active','N');
	              echo form_checkbox('active','Y',true,array('class'=>'minimal'));
		          echo lang("Active")
		          ?>
	            </label>
	          </div>
	        </div>
	        <hr />
	        
	        <div class="form-group">
			<label for="sort" class="control-label"><?=lang("Order")?></label>
	          <div class="checkbox">
	            <?=form_input('sort',value(isset($item->sort)?$item->sort:"10"),array('class'=>'form-control'))?>
	          </div>
	        </div>
	        <hr />
	        
	        <?php
			if(isset($list_cats)):
			?>
				<!-- Checkbox Categories -->
				<div class='form-group'>
					<label for='' class='control-label'><?=lang("Categories")?></label>
					<div class=''>
						<div style="padding:5px;max-height:300px;overflow: scroll;border:1px solid #d2d6de;">
						<?php 
							foreach($list_cats as $key=>$value):
								$check = "";
								if(!empty($item->articles_categories)){
									foreach($item->articles_categories as $k => $v){
										if($v->category_id == $key){
											$check = "checked";
											unset($item->article_category[$k]);
										}
									}
								}
								
								
						?>
								<div class="checkbox">
				                    <label>
				                      <input type="checkbox" <?=$check?> class='minimal' name="category_ids[<?=$key?>]" value="<?=$value?>">
				                      <?=$value?>
				                    </label>
				                  </div>
						<?php
							endforeach;
						?>
						</div>
						<div class='text-right'><a href="">+ <?=lang('create new')?></a></div>
					</div>
				</div>
				<hr />
				<?php
					endif;
					?>
					
				<div class='form-group'>
					<label for="inputEmail3" class="control-label"><?=lang("Image Article")?></label>
		     	 	
		     	 	<div class=''>
		    			<?php //$this->load->view("admin/elements/modules/upload_view",array('file'=>"image",'id'=>"img",'button_name'=>lang("Upload Image"),"field_id"=>"image",'value'=>"",'multiple'=>false,'type_file'=>'articles','basic'=>true));?>
		    			
		    			<?php
							$this->load->view("admin/elements/modules/upload_image_view",array('type'=>'image','field_id'=>'image','id'=>'image','value'=>isset($item->image)?$item->image:"",'multiple'=>false,'path'=>'/img/articles','button_name'=>'Upload Image','max_width'=>'300px'));
					?>
					</div>
				</div>
				<hr />
		</div>
		
	</div>
<?php
	/*./end-box
		*/
	$this->load->view('admin/elements/ui/box_content/box_footer',array('command_tools'=>array('save','cancel')));
?>
</form>
	
<?=content_close()?>