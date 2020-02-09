<?php
/**
Template Name: Realisaties
*/
get_header();
?>
<section class="bradecumb-sec-wrp">
  <div class="container-lg">
    <div class="row">
      <div class="col-sm-12">
        <div class="bradecumb-inr clearfix">
          <div class="bradecumb">
            <a href="#">
              <i><svg class="home-bradecumb-svg" width="25" height="25" viewBox="0 0 25 25" fill="#fff">
                  <use xlink:href="#home-bradecumb-svg"></use></svg></i>
            </a>
            <ul class="clearfix">          
              <li><a href="#">Home</a></li>
              <li><a href="#">Realisaties</a></li>
            </ul>
          </div>
          <div class="bradecumb-btn">
            <a href="#">
              <i><svg class="bradecumb-ary-svg" width="18" height="14" viewBox="0 0 18 14" fill="#fff">
                  <use xlink:href="#bradecumb-ary-svg"></use></svg></i>
            Terug</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="prlocations">
  <!--Types: tekoop, tehuur and verkocht-->
  <div id="prmapdata">
    <span data-title="Ravenakkerstraat 48 Moorsel" data-price="265.000" data-type="verkocht" data-latitude="50.9569388" data-longitude="4.1068167"></span>
    <span data-title="Ravenakkerstraat 48 Aalst" data-price="265.000" data-type="verkocht" data-latitude="50.9569318" data-longitude="4.1068167"></span>
    <span data-title="Lijnzaadstraat 54 Aalst" data-price="429.000" data-type="verkocht" data-latitude="50.953396" data-longitude="4.067167"></span>
    <span data-title="Jan Bijlstraat 21 Aalst" data-price="295.000" data-type="verkocht" data-latitude="50.9478536" data-longitude="4.0459704"></span>
    <span data-title="Kerrebroekstraat 98 Aalst" data-price="249.000" data-type="verkocht" data-latitude="50.9506563" data-longitude="4.02790630000004"></span>                    
  </div>

  <div id="prmap" data-uri="<?php echo THEME_URI; ?>/" data-lat="50.936736" data-lon="4.030753"></div>
</section>





<div class="realisatie-page-cntlr">
  <section class="grds-page-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="grds-page-entry-hdr-title">
          <h1>Realisaties</h1>
        </div>
      </div>
      <div class="col-md-12">
        <div class="psearch-form-flt-btn show-639">
            <img src="assets/images/rlst-filter-btn.png">
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
                      <select class="selectpicker" data-size="6" data-max-options="1" title="Type" multiple>
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
                      <select class="selectpicker" data-size="6" data-max-options="1" title="Land" multiple>
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
                      <select class="selectpicker" data-size="6" data-max-options="1" title="Gemeente" multiple>
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
                      <select class="selectpicker" data-size="6" data-max-options="1" title="Prijsklasse" multiple>
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
                        <i><svg class="banner-seach-icon-svg" width="23" height="23" viewBox="0 0 23 23" fill="white"><use xlink:href="#banner-seach-icon-svg"></use>
                          </svg></i>
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
          
          <div class="tab-btns-filter">
            <div class="tab-btns-filter-btn">
              <a href="<?php echo esc_url(home_url('/te-koop')); ?>/te-koop/" class="btn-tekoop">
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
              <a href="<?php echo esc_url(home_url('/verkocht-en-verhuurd')); ?>" class="btn-verkocht thisactive">
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
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
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
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-3.jpg');">   
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-3.jpg');">   
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-2.jpg');">   
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="bvi-property verkocht mix" data-price="100" data-title="G" data-place="R">
              <div class="bvi-grd-item">
                <div class="bvi-grd-item-img-ctlr">
                  <div class="bvi-grd-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/image-3.jpg');">   
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
                      <i><svg class="bvi-bed-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bed-svg"></use></svg></i>
                      <span>2-4 Slaapkamers</span>
                    </div>
                    <div class="bvi-grd-item-feature-item">
                      <i><svg class="bvi-bath-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                          <use xlink:href="#bvi-bath-svg"></use></svg></i>
                      <span>1-3 Badkamers</span>
                    </div>
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




<section class="footer-top-form-sec-wrp" style="background: url(<?php echo THEME_URI; ?>/assets/images/footer-top-form-bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="footer-top-form-inr clearfix">
          <div class="footer-form-wrp">
           <div class="ftr-top-frm-dsc">
              <h4>Gratis waardebepaling</h4>
              <p>Vul onderstaand formulier in om een gratis waardebepaling aan te vragen voor uw pand! We helpen u zo snel mogelijk verder.</p>
            </div>
          <div class="ftr-top-form clearfix">
            
            <div class="wpforms-container">
              <form class="wpforms-form">
                
                <div class="wpforms-field-container">
                  
                  <div class="wpforms-field">
                    <label class="wpforms-field-label">Naam *</label>
                    <input type="text" name="name" placeholder="Naam *" required>
                  </div>
                  <div class="wpforms-field">
                    <label class="wpforms-field-label">Voornaam *</label>
                    <input type="text" name="name" placeholder="Voornaam *" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">Telefoon *</label>
                    <input type="text" name="text" placeholder="Telefoon *" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">E-mailadres *</label>
                    <input type="email" name="email" placeholder="E-mailadres *" required>
                  </div>

                </div><!-- end of .wpforms-field-container-->

                <div class="ftr-msg">
                  <p>We contacteren u binnen de <br> werkdag!</p>
                </div>
                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">gratis schatting</button>
                </div>
              

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>