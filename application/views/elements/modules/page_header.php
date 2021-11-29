<!-- Page Header -->

<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1><?=lang($page_header_title)?></h1>
        <?php
	        if(isset($page_header_description))
	        echo "<p>".lang($page_header_description)."</p>";
	        ?>
        <!--<div class="page_nav">
          <span></span>
          <a href="index.html"><?=lang('Home')?></a> <span><i class="fa fa-angle-double-right"></i><?=lang($this->router->fetch_class())?></span>

        </div>-->
        <?=$this->breadcrumbs->show()?>
      </div>
    </div>
  </div>
</section>
<!- -Page Header -->
