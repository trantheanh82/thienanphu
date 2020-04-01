<?php
	$controller = $this->router->fetch_class();
	$action = $this->router->fetch_method();
	if($is_home):
	?>
<div class="container">
	<div class='header-contact'>
			<div class='text-right text-white' style='padding-right:50px;'>
				<i class="icon-phone"></i> <?=$Settings['company_phone_1']?> | <i class='icon-email'></i> <?=$Settings['company_email']?>
			</div>
	</div>
</div>
<?php
	endif;
	?>
<?=$is_home?'<div class="container">':''?>
  <nav class="<?=$is_home?"navbar navbar-default bootsnav":"navbar navbar-default navbar-sticky bootsnav"?>">
      <?=$is_home?'':'<div class="container">'?>
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	          <i class="fa fa-bars"></i>
	        </button>
	        <a class="navbar-brand" href="<?=base_url()?>">
	        	<?php
		        	echo img('assets/img/logo.png',array('class'=>'logo','alt'=>""))
		        	?>
	        </a>
	      </div>
	      <div class="collapse navbar-collapse" id="navbar-menu">
	        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
		        <?php
			        
			        foreach($public_menu as $k =>$v):
			        	$class = "";

			        	if(!empty($v->children)){
				        	$class .= "dropdown";
				        	if($v->type == "mega"){
				        		$class .= " megamenu-fw";
				        	}
			        	}
			        	
			        	if($controller == $v->controller && $action == $v->action){
				        	$class .= " on";
			        	}
			    ?>
			    <li class="<?=$class?>">
			    	<?=anchor(isset($v->link)?$v->link:$v->slug,lang($v->name),array('title'=>$v->name))?>
			    	<?php
				    	//check if has children menu 
				    	if(!empty($v->children)):
				    		
				    		//check if it is simple menu
				    		if($v->type == 'mega'):
				    			echo $this->load->view('elements/modules/mega_menu_content',array('menu_items'=>$v->children));
					    	// simple menu
					    	else:
					    ?>
					    <ul class="dropdown-menu">
					    	<?php
						    	foreach($v->children as $ck => $cv):
						    	?>
						    <li><?=anchor($v->slug.'/'.(isset($cv->slug)?$cv->slug:$cv->link),lang($cv->name),array('title'=>$cv->name))?></li>	
						    <?php
							    endforeach; 
							    ?>
				    	</ul>
					    <?php
						    endif;
					    endif;
					    	?>
			    </li>    
			    <?php
		        	endforeach;
		        ?>
		        <!--
	          <li class="dropdown on">
	            <a href="<?=base_url()?>" class="dropdown-toggle" data-toggle="dropdown"><?=lang('Home')?></a>
	          </li>
	          <li class="dropdown">
	            <a class="dropdown-toggle" data-toggle="dropdown" >Giới thiệu</a>
	            <ul class="dropdown-menu">
	              <li><a href="about.html">Giới thiệu</a></li>
	              <li><a href="about.html">Dịch vụ thương mại</a></li>
	              <li><a href="about.html">Lĩnh vực hoạt động</a></li>
	            </ul>
	          </li>
	          <li class="dropdown megamenu-fw">
	            <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Giải pháp</a>
	            <ul class="dropdown-menu megamenu-content" role="menu" style="border-top:1px solid #a50021;">
		            <li class='col-md-3'>
			            <div class='row'>
				            <div class='col-menu col-md-12'>
				            	<h6 class="title">Giải pháp công nghệ</h6>
				            	<div class='content'>
					            	<div class="image">
								         <img src="images/giai-phap-cong-nghe.jpg" alt="Thien An Phu">
								    </div>
								    <p style='text-align:justify;'><br />Là nhà cung cấp giải pháp ở cấp độ hợp tác cao nhất với hầu hết các hãng CNTT hàng đầu thế giới, ADG có khả năng cung cấp và tích hợp hầu hết các giải pháp hạ tầng cơ sở CNTT như giải pháp Hạ tầng mạng, giải pháp Hạ tầng trung tâm dữ liệu, giải pháp Hệ thống máy chủ và lưu trữ và giải pháp xây dựng Cơ sở Dữ liệu (CSDL) doanh nghiệp toàn diện.
								    </p>
				            	</div>
				            </div>
			            </div>
		            </li>
	              <li class='col-md-9'>
	                <div class="row">
	                  <div class="col-menu col-md-6" style="margin-bottom:30px;">
	                    <h6 class="title">Máy chủ lưu trữ</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="service-detail.html">Máy chủ lưu trữ</a></li>
	                        <li><a href="service-detail.html">Máy chủ lưu trữ</a></li>
	                        <li><a href="service-detail.html">Máy chủ lưu trữ</a></li>
	                        <li><a href="service-detail.html">Máy chủ lưu trữ</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-menu col-md-6"  style="margin-bottom:30px;">
	                    <h6 class="title">Hạ tầng dữ liệu</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="service-detail.html">Hạ tầng dữ liệu 01</a></li>
	                        <li><a href="service-detail.html">Hạ tầng dữ liệu 02</a></li>
	                        <li><a href="service-detail.html">Hạ tầng dữ liệu 03</a></li>
	                        <li><a href="service-detail.html">Hạ tầng dữ liệu 04</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-menu col-md-6">
	                    <h6 class="title">Phần mềm doanh nghiệp</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="service-detail.html">Phần mềm doanh nghiệp 01</a></li>
	                        <li><a href="service-detail.html">Phần mềm doanh nghiệp 02</a></li>
	                        <li><a href="service-detail.html">Phần mềm doanh nghiệp 03</a></li>
	                        <li><a href="service-detail.html">Phần mềm doanh nghiệp 04</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <br class='clearfix' />
	                  <div class="col-menu col-md-6">
	                    <h6 class="title">Thiết bị mạng</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="service-detail.html">Thiết bị mạng 01</a></li>
	                        <li><a href="service-detail.html">Thiết bị mạng 02</a></li>
	                        <li><a href="service-detail.html">Thiết bị mạng 03</a></li>
	                        <li><a href="service-detail.html">Thiết bị mạng 04</a></li>
	
	                      </ul>
	                    </div>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="services.html" class="dropdown-toggle" data-toggle="dropdown" >Dịch vụ</a>
	            <ul class="dropdown-menu">
	              <li><a href="services.html">Services</a></li>
	              <li><a href="service-detail.html">Services Detail</a></li>
	            </ul>
	          </li>
	          <li class="dropdown megamenu-fw">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hãng sản xuất</a>
	            <ul class="dropdown-menu megamenu-content" role="menu" style="border-bottom:1px solid #a50021">
	              <li>
	                <div class="row">
	                  <div class="col-menu col-md-3">
	                    <h6 class="title">Pages</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="about.html">About</a></li>
	                        <li><a href="testinomial.html">Testinomial</a></li>
	                        <li><a href="team.html">Team</a></li>
	                        <li><a href="pricing.html">Pricings</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-menu col-md-3">
	                    <h6 class="title">Blog</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="blog.html">Blog 01</a></li>
	                        <li><a href="blog2.html">Blog 02</a></li>
	                        <li><a href="blog3.html">Blog 03</a></li>
	                        <li><a href="blog_detail.html">Blog Detail</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-menu col-md-3">
	                    <h6 class="title">Shop</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="shop.html">Shop</a></li>
	                        <li><a href="shop_detail.html">Shop Detail</a></li>
	                        <li><a href="shop_cart.html">Cart</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-menu col-md-3">
	                    <h6 class="title">Others</h6>
	                    <div class="content">
	                      <ul class="menu-col">
	                        <li><a href="gallery.html">Gallery</a></li>
	                        <li><a href="faq.html">Faq</a></li>
	                        <li><a href="404.html">404</a></li>
	                      </ul>
	                    </div>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </li>
	          <li  class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Tin tức</a>
	            <ul class="dropdown-menu">
	              <li><a href="services.html">Tin Hoạt Động</a></li>
	              <li><a href="service-detail.html">Tin Công Nghệ</a></li>
	              <li><a href="service-detail.html">Sự Kiện</a></li>
	
	              <li><a href="service-detail.html">Góc báo chí</a></li>
	           	</ul>
	          </li>
	
	          <li><a href="contact.html">Liên hệ</a></li>
	        </ul>-->
	      </div>
      <?=$is_home?'':'</div>'?>
  </nav>
 <?=$is_home?'</div>':''?>