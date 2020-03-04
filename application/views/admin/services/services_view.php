<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="col-sm-3 col-md-3">
		<?php $this->load->view('admin/elements/left_menu_view');?>
	</div>
	<div class="col-right col-sm-9 col-md-9">
		<h3 class="text-capitalize"><?php echo $page_name ?></h3>
		<!-- Languages Selection -->
		<?php
			$this->load->view('admin/elements/language_selection_view');
		?>
		<!-- End Language Selection -->
		<div style='margin-top:20px;'>
			<table class="table table-hover table-bordered table-condensed">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Image</th>
					<th>Sort</th>
					<th>Active</th>
					<th>Created</th>
					<th></th>
				</tr>
				<?php
						foreach($items as $item):
						?>
						<tr>
							<td><?=$item->id?></td>
							<td><?=!empty($item->translations->name)?$item->translations->name:$item->translations[0]->name?></td>
							<td>
								<?php
									if(!empty($item->image)):	
								?>
									<img src='<?=base_url()?>assets/upload/img/thumbnail/<?=$item->image?>' width='100'/>
								<?php
									endif;
								?>
							</td>
							<td><?=$item->sort?></td>
							<td><?=$item->active?></td>
							<td><?=$item->created_at?></td>
							<td><a href='<?=base_url()?>admin/services/edit/<?=$item->id?>'><i class="glyphicon glyphicon-edit"></i></a> <a id='<?=$item->id?>' class='delete' data-delete-link='<?=base_url()?>admin/services/delete/<?=$item->id?>' data-toggle="modal" data-target="#myModal" data-title='confirm delete'><i class='glyphicon glyphicon-remove'></i></a></td>
						</tr>
					<?php
						endforeach;
					?>
			</table>
		</div>
	</div>
</div>