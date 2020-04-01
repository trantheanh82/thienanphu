<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- Main Content -->
<?php 
		$this->load->view('admin/elements/section_header_view');
	?>
<?=content_open(ucfirst($page_name),$this)?>


	<div class='box-body'>
		<table id="data" class="table table-bordered table-striped table-hover">
		    <thead>
			    <tr>
			      <th class='text-center'><?=lang("ID")?></th>
			      <th class='text-center'><?=lang("Name")?></th>
			      <th class='text-center'><?=lang('Email')?></th>
			      <th class='text-center'><?=lang('Phone')?></th>
			      <th class='text-center'><?=lang('Message')?></th>
			      <th class='text-center'><?=lang("Read")?></th>
			      <th class='text-center'><?=lang("Action")?></th>
			               
			    </tr>
		    </thead>
			<tbody>
				
				<?php
					if(!empty($items)):
						foreach($items as $k=>$v):
						$link_edit = base_url().'admin/'.$page_name.'/read/'.$v->id;
					?>
					<tr>
						<td class='text-center'><?=$v->id?></td>
						<td><a href="<?=$link_edit?>"><?=$v->name?></a></td>
						
						<td><a href="<?=$link_edit?>"><?=$v->email?></a></td>
						<td class='text-center'><?=$v->phone?></td>
						<td class='text-center'><?=$v->message?></td>
						<td class='text-center'><?=$v->view=='Y'?'Seen':'Not'?>
						<td class='text-center'><?=anchor($link_edit,'<i class="fa fa-eye"></i>',array('title'=>__('View',$this)))?></td>
					</tr>
				<?php
						endforeach;
					endif;
					?>
			</tbody>
			<tfoot>
				
					 <tr>
				      <th class='text-center'><?=lang("ID")?></th>
				      <th class='text-center'><?=lang("Name")?></th>
				      <th class='text-center'><?=lang('Email')?></th>
				      <th class='text-center'><?=lang('Phone')?></th>
				      <th class='text-center'><?=lang('Message')?></th>
				      <th class='text-center'><?=lang("Read")?></th>
				      <th class='text-center'><?=lang("Action")?></th>
				  	</tr>
			</tfoot>
		</table>
	</div>
	
<?=content_close()?>