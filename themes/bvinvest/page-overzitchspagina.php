<?php 
/*
  Template Name: Overzitchspagina
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/breadcrumbs'); ?>

<div class="overzichtspagina-page-cntlr">
<section class="grds-page-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="grds-page-entry-hdr-title">
          <h1>IMMOBILIËN AALST</h1>
        </div>
      </div>
      <div class="col-md-12">
        <div class="psearch-form-flt-btn show-639">
            <img src="<?php echo THEME_URI; ?>/assets/images/rlst-filter-btn.png">
            <strong>Filter</strong>
        </div>
      </div>
      <div class="col-md-12">
        <div class="psearch-form-wrap pageSearch">
          <form>
            <div class="psearch-form">
              <div class="psearch-form-fields">
                <ul class="clearfix ulc">
                  <li>
                    <div>
                      <select class="selectpicker" data-size="3">
                        <option value="*">type</option>
                        <option value="type1">Option 1</option>
                        <option value="type2">Option 2</option>
                        <option value="type3">Option 3</option>
                        <option value="type4">Option 4</option>
                        <option value="type5">Option 5</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div>
                      <select class="selectpicker" data-size="3">
                        <option value="*">Land</option>
                        <option value="type1">Option 1</option>
                        <option value="type2">Option 2</option>
                        <option value="type3">Option 3</option>
                        <option value="type4">Option 4</option>
                        <option value="type5">Option 5</option>
                      </select>
                    </div>
                  </li>
                  
                  <!-- <li>
                    <div>
                      <input type="text" name="" placeholder="Lorem ipsum">
                    </div>
                  </li> -->
                  <li>
                    <div>
                      <select class="selectpicker" data-size="3">
                        <option value="*">Gemeente</option>
                        <option value="type1">Option 1</option>
                        <option value="type2">Option 2</option>
                        <option value="type3">Option 3</option>
                        <option value="type4">Option 4</option>
                        <option value="type5">Option 5</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div>
                      <select class="selectpicker" data-size="3">
                        <option value="*">Prijsklasse</option>
                        <option value="type1">Option 1</option>
                        <option value="type2">Option 2</option>
                        <option value="type3">Option 3</option>
                        <option value="type4">Option 4</option>
                        <option value="type5">Option 5</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div class="submit">
                      <button type="submit">
                        <span>zoeken 
                        <i>  
                          <svg class="banner-seach-icon-svg" width="23" height="23" viewBox="0 0 23 23" fill="white">
                            <use xlink:href="#banner-seach-icon-svg"></use>
                          </svg>
                        </i>
                      </span>
                      </button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>   
</section>

<section class="tab-btns-filter-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab-btns-bar-ctlr clearfix">
          <div class="tab-btns-filter hide-639">
            <div class="tab-btns-filter-btn">
              <button class="" type="button" data-filter=".category-a">
                <i>
                  <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                    <use xlink:href="#bvi-key-svg"></use>
                  </svg>
                </i>
                <span>te koop</span>
              </button>
            </div>
            <div class="tab-btns-filter-btn">
              <button class="" type="button" data-filter=".category-b">
                <i>
                  <svg class="bvi-calendar-2-svg" width="19" height="19" viewBox="0 0 19 19" fill="#fff">
                    <use xlink:href="#bvi-calendar-2-svg"></use>
                  </svg>
                </i>
                <span>te huur</span>
              </button>
            </div>
            <div class="tab-btns-filter-btn">
              <button class="" type="button" data-filter=".category-c">
                <i>
                  <svg class="bvi-rlsts-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff">
                    <use xlink:href="#bvi-rlsts-svg"></use>
                  </svg>
                </i>
                <span>Realisaties</span>
              </button>
            </div>
          </div>
          <div class="tab-btns-filter show-639">
            <select class="xs-cat-select selectpicker form-control" data-show-content="true" data-size="3">

              <option data-filter=".category-a" data-content='<i><img src="<?php echo THEME_URI; ?>/assets/images/bvi-key.svg"></i> <span>te koop<span>'>
              </option>
              <option data-filter=".category-b" data-content='<i><img src="<?php echo THEME_URI; ?>/assets/images/bvi-calendar-2.svg"></i> <span>te huur<span>'>
              </option>
              <option data-filter=".category-c" data-content='<i><img src="<?php echo THEME_URI; ?>/assets/images/bvi-rlsts.svg"></i> <span>Realisaties<span>'>
              </option>
            </select>
          </div>

          <div class="tab-btns-bar-rgt-select clearfix">
            <label>Sorteer op: </label>
            <select class="selectpicker" data-size="3">
              <option value="*">PRIJS TOENEMEND</option>
              <option value="type1">Option 1</option>
              <option value="type2">Option 2</option>
              <option value="type3">Option 3</option>
              <option value="type4">Option 4</option>
              <option value="type5">Option 5</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<section class="bvi-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bvi-grid-ctlr">
          <ul class="ulc clearfix mixContainer">
            <li class="green bv-grd-item mix category-a">
              <div class="bvi-grd-item">  
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-1.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">
                    <div class="bvi-grd-icon">
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                      <div class="bvi-grd-date">
                        <i>
                          <svg class="bvi-calendar-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff">
                            <use xlink:href="#bvi-calendar-svg"></use>
                          </svg>
                        </i>
                        <span>donderdag, 16 Jan, 12u00</span>
                      </div>
                    </div>   
                  </div>
                  
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-a">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="red bv-grd-item mix category-b">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-3.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-act-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff">
                            <use xlink:href="#bvi-act-svg"></use>
                          </svg>
                        </i>
                        <span>verkocht</span>
                      </div>
                    </div>
                    
                  </div>
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong class="vkt">Verkocht</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-a">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-4.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>                
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-c">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-5.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                   
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-c">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-6.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-a category-b">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-7.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-a category-c">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-1.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                  
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="green bv-grd-item mix category-c">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-8.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon">  
                    </div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>
                          <svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff">
                            <use xlink:href="#bvi-key-svg"></use>
                          </svg>
                        </i>
                        <span>Te koop</span>
                      </div>
                    </div> 
                  </div>
                                   
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5><a href="#">WONING AALST</a></h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use>
                        </svg>
                      </i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i>
                        <svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use>
                        </svg>
                      </i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-des-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bvi-pagination-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bvi-pgt-cltr">
          <ul class="ulc page-numbers">
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#">2</a></li>
            <li><a class="page-numbers" href="#">3</a></li>
            <li><a class="page-numbers" href="#">4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<?php get_template_part('templates/footer', 'form'); ?>
<?php get_footer(); ?>