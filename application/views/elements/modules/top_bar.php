<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <span class="info"><a href="#.">Liên hệ để tư vấn?</a></span>
        <span class="info"><i class="icon-phone4"></i>
        	<?=$Settings['company_phone_1'].(!empty($Settings['company_phone_2'])?" - ".$Settings['company_phone_2']:"")?> 
        </span>
        <?php
	        if(isset($Settings['company_email'])): ?>
        <span class="info"><i class="icon-envelope"></i><?=$Settings['company_email']?></span>
        <?php
	        endif;
	        ?>
        </div>
        <ul class="social_top pull-right">
          <li><a href="<?=$Settings['social_facebook']?>"><i class="fa fa-facebook"></i></a></li>
          <!--<li><a href="#."><i class="icon-twitter4"></i></a></li>
          <li><a href="#."><i class="icon-google"></i></a></li>-->
        </ul>
      </div>
    </div>
  </div>
</div>