<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$this->load->view('admin/elements/section_header_view');
?>
<?=content_open($page_name,$this)?>
<form class="form-horizontal" role="form" action="<?=site_url('admin/services/submit')?>" method="post" id='main_form_submit'>
<?php
	if(isset($item->id)){
		echo form_hidden('id',$item->id);
	}
?>
	<div class='box-body'>
		<!-- ./col left -->
		<div class='col-sm-9 border-right-3d'>
			<div class='form-group'>
                    <!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=lang("Title")?>">-->
                    <?=form_input('name',value(isset($item->name)?$item->name:""),array('id'=>'title','class'=>'form-control make_slug editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>lang("Title")))?>
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
            
		</div>
		<!-- ./col right -->
		<div class='col-sm-3'>
			
			<div class="form-group">
				<label for="active" class="control-label"><?=lang("Status")?></label>
	          <div class="checkbox">
	            <label>
	              <input type="checkbox" checked value="Y">
	              <?=lang("Active")?>
	            </label>
	          </div>
	        </div>
	        <hr />
	        
	        <div class="form-group">
			<label for="sort" class="control-label"><?=lang("Order")?></label>
	          <div class="checkbox">
	            <?=form_input('sort',value(isset($item->sort)?$item->sort:"10"),array('class'=>'form-control','width'=>'50'))?>
	          </div>
	        </div>
	        <hr />
	        <?php
				if(isset($list_cats) && !empty($list_cats)):
			?>
				<!-- Checkbox Categories -->
				<div class='form-group'>
					<label for='' class='control-label'><?=lang("Categories")?></label>
					<div class=''>
						<div style="padding:5px;max-height:300px;overflow: scroll;border:1px solid #d2d6de;">
						<?php 
							foreach($list_cats as $key=>$value):
								$check = "";
								if(!empty($item->page_category)){
									foreach($item->page_category as $k => $v){
										if($v->category_id == $key){
											$check = "checked";
											unset($item->page_category[$k]);
										}
									}
								}
						?>
								<div class="checkbox">
				                    <label>
				                      <input type="checkbox" <?=$check?> name="category_ids[<?=$key?>]" value="<?=$value?>">
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
					<label for="inputEmail3" class="control-label"><?=lang("Image Service")?></label>
		     	 	
		     	 	<div class=''>
		    			<?php //$this->load->view("admin/elements/modules/upload_view",array('file'=>"image",'id'=>"img",'button_name'=>lang("Upload Image"),"field_id"=>"image",'value'=>"",'multiple'=>false,'type_file'=>'articles','basic'=>true));?>
		    			<?php
							$this->load->view("admin/elements/modules/upload_image_view",array('type'=>'image','field_id'=>'upload_image','id'=>'image','value'=>isset($item->image)?$item->image:"",'multiple'=>false,'path'=>'/img','button_name'=>'Upload Image','max_width'=>'300px'));
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