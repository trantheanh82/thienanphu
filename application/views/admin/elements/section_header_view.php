<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
	$this->load->view('admin/elements/flash_message_view');
	
	if(!isset($breadcrumb)){
		$breadcrumb = array_values($this->uri->rsegments);
	}
	
	if(!empty($script_for_page)){
		echo "<!--- script for page in section header view --->".$script_for_page."<!-- ./script for page in section header view -->";
	}
?>
<section class="content-header">
  <h1>
	  <?=__(ucwords($breadcrumb[0]),$this)?>
    <small><?=__(ucwords($breadcrumb[1]),$this)?></small>
  </h1>
  <ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i><?=__("Home",$this)?></a></li>
	 <?php
		 foreach($breadcrumb as $k =>$b):
	?>
	<li class="active"><a href="<?=site_url().'admin/'.$breadcrumb[$k]?>"><?=__(ucwords($breadcrumb[$k]),$this)?></a></li>
	<?php
		endforeach;
		?>
  </ol>
</section>