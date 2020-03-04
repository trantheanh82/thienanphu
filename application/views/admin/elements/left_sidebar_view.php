<?php
	/*Configure*/
	$controller  = $this->router->fetch_class();
	$action = $this->router->fetch_method();
/**/
	?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <?php
	  $this->load->view('admin/elements/user/sidebar_view');
	  
	 // $this->load->view('admin/elements/modules/search_form_sidebar_view');
  ?>
  
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header"><?=__('MAIN NAVIGATION',$this)?></li>
    <?php
	    // end top level admin menu
		if(!empty($admin_menu)):
		$menu_class = "";
			foreach($admin_menu as $k=>$menu1):
			
			 if($menu1->controller == $controller){
				 $menu_class .= " active menu-open";
			 }
				
			 if(!$menu1->children){
				 
				 
					$link = menulink($menu1);
					$data_load = "data-load='ajax' title='".$menu1->name."'"; 
				 
			 }else{
				 $menu_class .= " treeview";
				 $link = '#';
				 $data_load = "";
			 }
		     
	?>
		<li class="<?=$menu_class?>">
	      <a href="<?=$link?>"  <?=$data_load?>>
	        <i class="<?=icon($menu1->icon)?>"></i>  <span><?=__($menu1->name,$this)?></span>
	        <?php
		        	if(!empty($menu1->children)):
		        ?>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-righ"></i>
	        </span>
	        <?php
		        	endif;
		        ?>
	      </a>
	      	<?php
		      	// Menu level 2
		      	if(!empty($menu1->children)):
		      		
	      	?>
	      <ul class="treeview-menu">
		      <?php
			      	foreach($menu1->children as $key=>$menu2):
			      	
			      	$class = "";
			      	if($menu2->action == $action){
				      	$class .= " active";
			      	}
			      		if(!$menu2->children){
				      		$class .="";
				      		$data_load = "data-load='ajax'";
			      		}else{
				      		$class .=" treeview";
				      		$data_load = "";
			      		}
			      ?>
	        <li class="<?=$class?>">
	        	<a href="<?=menulink($menu2)?>" <?=$data_load?>><i class="<?=icon($menu2->icon)?>"></i> <?=__($menu2->name,$this)?>
	        		<?php
		        		if(!empty($menu2->children)):
		        	?>
		        		<span class="pull-right-container">
			                <i class="fa fa-angle-left pull-right"></i>
			            </span>
		        	<?php
			        	endif;
			        ?>
			    </a>
			    <?php
				    if(!empty($menu2->children)):
				?>
				<ul class="treeview-menu">
                
				<?php
				    //Menu level 3
				    foreach($menu2->children as $level3 => $menu3):
				    ?>
				    <li><a href="<?=menulink($menu3)?>" data-load='ajax'><i class="<?=icon($menu3->icon)?>"></i> <?=__($menu3->name,$this)?></a></li>
				<?php
					endforeach;
					?>
				</ul>
				<?php
					endif;
					?>
			    
	        </li>
	        <?php
		        	endforeach; 
		        ?>
	      </ul>
	    </li>
	    <?php 
	    		endif; // End if children $v->children
	    		//.$menu_class
	    		$menu_class = "";
			endforeach;
		endif; // end top level admin menu
		?>
    <!--
    <li class="active treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Layout Options</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      </ul>
    </li>
    <li>
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Widgets</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Charts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>UI Elements</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Forms</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-table"></i> <span>Tables</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
      </ul>
    </li>
    <li>
      <a href="pages/calendar.html">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-red">3</small>
          <small class="label pull-right bg-blue">17</small>
        </span>
      </a>
    </li>
    <li>
      <a href="pages/mailbox/mailbox.html">
        <i class="fa fa-envelope"></i> <span>Mailbox</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-yellow">12</small>
          <small class="label pull-right bg-green">16</small>
          <small class="label pull-right bg-red">5</small>
        </span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-folder"></i> <span>Examples</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i> Level One
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
   
    <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
     -->
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
<div><p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
</aside>