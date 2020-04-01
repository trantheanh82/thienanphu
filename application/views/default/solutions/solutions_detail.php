<!-- services -->
<section id="course_all" class="padding-bottom-half padding-top">
  <div class="container">
    <div class="row">
	    <div class="course_detail wow fadeIn animated animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
        <?=img($item->image,false, array('alt'=>$item->name,'class'=>'border_radius img-responsive bottom15'));?>
        
        <div class="detail_course">
          
          <!--<div class="info_label">
            <span class="icony"><i class="icon-users3"></i></span>
            <p>Tư vấn</p>
            <h5>THIÊN AN PHÚ</h5>
          </div>
          <div class="info_label">
            <span class="icony"><i class="icon-users3"></i></span>
            <p>Danh mục</p>
            <h5>Kiến thức CNTT  /  Phần Cứng</h5>
          </div>
          <div class="info_label hidden-xs"></div>
          <div class="info_label">
            <form class="star_rating bottom5">
              <div class="stars">
                <input type="radio" name="star" class="star-1" id="star-01">
                <label class="star-1" for="star-01">1</label>
                <input type="radio" name="star" class="star-2" id="star-02">
                <label class="star-2" for="star-02">2</label>
                <input type="radio" name="star" class="star-3" id="star-03">
                <label class="star-3" for="star-03">3</label>
                <input type="radio" name="star" class="star-4" id="star-04" checked="">
                <label class="star-4" for="star-04">4</label> 
                <input type="radio" name="star" class="star-5" id="star-05">
                <label class="star-5" for="star-05">5</label>
                <span></span>
              </div>
            </form>
            
          </div>-->
        </div>
        <h3 class="top30 bottom20"><?=$item->name?></h3>
        
        <div class='service-content'>
        <?=$item->content?>
        </div>
        <div class="bottom15"></div>
        <?=$this->load->view('elements/modules/module_share_social')?>
        
      </div>
    </div>
  </div>
</section>
<!-- services ends -->
<!--Shopping-->
<?=$this->load->view('default/products/products_view',array('products'=>$item->products,'class'=>""))?>
<div style='padding-bottom:90px;'></div>