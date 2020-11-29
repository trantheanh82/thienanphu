
<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	            <?=img($this->ion_auth->user()->row()->profile_pic,true,array('onerror'=>'this.src=\''.base_url().'assets/img/default-avatar.png\'','class'=>"user-image","alt"=>$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name))?>
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-xs"><?=$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
<?=img($this->ion_auth->user()->row()->profile_pic,true,array('onerror'=>'this.src=\''.base_url().'assets/img/default-avatar.png\'','class'=>"img-circle","alt"=>$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name))?>
                <p>
                  <?php print_r($this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name);?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?=anchor('admin/user/profile/'.$this->ion_auth->user()->row()->id,__('Profile',$this),array('class'=>'btn btn-default btn-flat'))?>
                </div>
                <div class="pull-right">
                  <?=anchor('admin/auth/logout',__('Sign out',$this),array('class'=>'btn btn-default btn-flat'))?>
                </div>
              </li>
            </ul>
          </li>
