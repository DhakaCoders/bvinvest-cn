<?php 
/**
Template Name: Kijkdagen
*/
get_header();
?>
<?php get_template_part('templates/breadcrumbs'); ?>


<section class="prlocations">
  <!--Types: tekoop, tehuur and verkocht-->
  <div id="prmapdata">
    <span data-title="Ravenakkerstraat 48 Moorsel" data-link="#" data-price="265.000" data-type="tehuur" data-latitude="50.9569388" data-longitude="4.1068167"></span>
    <span data-title="Ravenakkerstraat 48 Aalst" data-link="#" data-price="265.000" data-type="tehuur" data-latitude="50.9569318" data-longitude="4.1068167"></span>
    <span data-title="Lijnzaadstraat 54 Aalst" data-link="#" data-price="429.000" data-type="tehuur" data-latitude="50.953396" data-longitude="4.067167"></span>
    <span data-title="Jan Bijlstraat 21 Aalst" data-link="#" data-price="295.000" data-type="tehuur" data-latitude="50.9478536" data-longitude="4.0459704"></span>
    <span data-title="Kerrebroekstraat 98 Aalst" data-link="#" data-price="249.000" data-type="tehuur" data-latitude="50.9506563" data-longitude="4.02790630000004"></span>                    
  </div>

  <div id="prmap" data-uri="<?php echo THEME_URI; ?>/" data-lat="50.936736" data-lon="4.030753"></div>
</section>



<div class="kijkdagen-page-cntlr">
<section class="grds-page-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="grds-page-entry-hdr-title">
          <h1>Kijkdagen</h1>
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
          <?php get_template_part( 'templates/form', 'search' ); ?> 
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
          
          <div class="tab-btns-filter">
            <div class="tab-btns-filter-btn">
              <a href="<?php echo esc_url(home_url('/te-koop')); ?>" class="btn-tekoop thisactive">
                <i><svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff"><use xlink:href="#bvi-key-svg"></use></svg></i>
                <span>te koop</span>
              </a>
            </div>
            <div class="tab-btns-filter-btn">
              <a href="<?php echo esc_url(home_url('/te-huur')); ?>" class="btn-tehuur">
                <i><svg class="bvi-calendar-2-svg" width="19" height="19" viewBox="0 0 19 19" fill="#fff"><use xlink:href="#bvi-calendar-2-svg"></use></svg></i>
                <span>te huur</span>
              </a>
            </div>
            <div class="tab-btns-filter-btn">
              <a href="<?php echo esc_url(home_url('/verkocht-en-verhuurd')); ?>" class="btn-verkocht">
                <i><svg class="bvi-rlsts-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff"><use xlink:href="#bvi-rlsts-svg"></use></svg></i>
                <span>Realisaties</span>
              </a>
            </div>
          </div>

          <div class="tab-btns-bar-rgt-select clearfix">
            <label>Sorteer op: </label>
            <select id="itemSort" class="selectpicker" data-max-options="1" title="PRIJS TOENEMEND" data-size="6" multiple>
              <option value="price:asc">Price</option>
              <option value="title:asc">A-Z</option>
              <option value="title:desc">Z-A</option>
              <option value="place:asc">Place</option>
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
            
            <li class="bvi-property tekoop mix" data-price="90" data-title="B" data-place="K">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
                        <i><svg class="bvi-key-svg" width="22" height="21" viewBox="0 0 22 21" fill="#fff"><use xlink:href="#bvi-key-svg"></use></svg></i>
                        <span>Te koop</span>
                      </div>
                      <div class="bvi-grd-date">
                        <i><svg class="bvi-calendar-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff"><use xlink:href="#bvi-calendar-svg"></use></svg></i>
                        <span>donderdag, 16 Jan, 12u00</span>
                      </div>
                    </div>   
                  </div>               
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff"><use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff"><use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property tehuur mix" data-price="80" data-title="C" data-place="L">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
                        <i><svg class="bvi-calendar-2-svg" width="19" height="19" viewBox="0 0 19 19" fill="#fff"><use xlink:href="#bvi-calendar-2-svg"></use></svg></i>
                        <span>Te huur</span>
                      </div>
                      <div class="bvi-grd-date">
                        <i><svg class="bvi-calendar-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff"><use xlink:href="#bvi-calendar-svg"></use></svg></i>
                        <span>donderdag, 16 Jan, 12u00</span>
                      </div>
                    </div>   
                  </div>               
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong>€ 276.600,00</strong>
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
                  <div class="bvi-grd-item-feature clearfix">
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff"><use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff"><use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-1.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
                        <i><svg class="bvi-act-svg" width="20" height="20" viewBox="0 0 20 20" fill="#fff">
                            <use xlink:href="#bvi-act-svg"></use></svg></i>
                        <span>Verkocht</span>
                      </div>
                    </div>   
                  </div>
                                    
                </div>

                <div class="mHc bvi-grd-item-des">
                  <strong class="vkt">Verkocht</strong>
                  <h5 class="property-title">WONING AALST</h5>
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
            <li class="bvi-property tekoop mix" data-price="40" data-title="T" data-place="N">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-06.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property tehuur mix" data-price="70" data-title="L" data-place="W">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property verkocht mix" data-price="20" data-title="H" data-place="Q">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-1.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
            <li class="bvi-property tekoop mix" data-price="30" data-title="Y" data-place="U">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-06.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property tehuur mix" data-price="120" data-title="G" data-place="H">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
                  <div class="bvi-grd-item-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="bvi-property verkocht mix" data-price="160" data-title="B" data-place="N">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-1.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
            <li class="bvi-property tekoop mix" data-price="190" data-title="C" data-place="X">
              <div class="bvi-grd-item">
                
                <div class="bvi-grd-item-img-ctlr">
                  <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>" class="overlay-link"></a>
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-06.jpg');">   
                  </div>
                  <div class="bvi-grid-key-info-ctlr clearfix">

                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-cat">
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
                  <h5 class="property-title">
                    <a href="<?php echo esc_url(home_url('/immobilien-details/')); ?>">WONING AALST WONING AALST WONING AALST WONING AALST</a>
                  </h5>
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
                  <div class="bvi-grd-item-link">
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