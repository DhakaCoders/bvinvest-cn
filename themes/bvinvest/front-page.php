<?php get_header(); ?>
<?php
  $hero = get_field('hero', HOMEID);
  $mobile = get_field('mobile', HOMEID);
  $heroposter = '';
  if(!empty($hero['achtergrondafbeelding'])) $heroposter = cbv_get_image_src($hero['achtergrondafbeelding']);
?>
<section class="page-banner-sec-con">
  <div class="page-banner-bg-con" style="background: url('<?php echo $heroposter; ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-banner-des text-center m-auto">
          <h1>
          <?php 
          if( !empty( $hero['subtitel'] ) ) printf( '%s', $hero['subtitel']); 
          if( !empty( $hero['titel'] ) ) printf( '<strong>%s</strong>', $hero['titel']); 
          ?>
          </h1>
        <?php if( !empty( $hero['beschrijving'] ) ) echo wpautop( $hero['beschrijving'], true ); ?>  
        </div>
        <div class="sm-page-banner-des text-center show-sm">
          <?php 
            if( !empty( $mobile['titel'] ) ) printf( '<strong>%s</strong>', $mobile['titel']); 
            $knop1 = $mobile['knop'];
            if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
              printf('<a href="%s" target="%s"><span>%s</span></a>', $knop1['url'], $knop1['target'], $knop1['title']); 
            }

              ?>
        </div>
        <div class="psearch-form-wrap">
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

<?php
  $intro = get_field('intro', HOMEID);
  if( $intro ):
  $intropostertag = $introposter = '';
  if(!empty($intro['afbeelding'])){ 
    $introposter = cbv_get_image_src($intro['afbeelding'], 'hintro');
    $intropostertag = cbv_get_image_src($intro['afbeelding'], 'hintro');
  }
?>
<section class="bw-invest-sec">
  <span class="bw-invest-top-gray-bg"></span>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bw-invest-innr">
          <div class="bw-invest-img">
            <div class="bw-invest-img-bg" style="background: url('<?php echo $introposter; ?>');">
              <span>
                <?php echo $intropostertag; ?>            
              </span>              
            </div>
          </div>
          <div class="bw-invest-des">
            <h2>
            <?php 
              if( !empty( $intro['subtitel'] ) ) printf( '<strong>%s</strong>', $intro['subtitel']); 
              if( !empty( $intro['titel'] ) ) printf( '%s', $intro['titel']); 
              ?>
            </h2>
            <?php 
              if( !empty( $intro['beschrijving'] ) ) echo wpautop( $intro['beschrijving'], true ); 

              $knop = $intro['knop'];
              if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $knop['url'], $knop['target'], $knop['title']); 
              }
            ?>  
          </div>
        </div> 
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>

<section class="pregress-counter-sec ">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="pregress-counter-innr-wrp">          
          <span class="pregressLeftArrow show-sm">
            <svg class="dft-slider-left-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
              <use xlink:href="#dft-slider-left-arrow"></use>
            </svg>
          </span>
          <span class="pregressRightArrow show-sm">
            <svg class="dft-slider-right-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
              <use xlink:href="#dft-slider-right-arrow"></use>
            </svg>
          </span>

          <div class="pregressSlider pregress-counter-innr clearfix dft-slider-pagi">
            <div class="pregress-counter-col">
<div class="circle1 bv-progress-bar">
  <span class="number">9248</span>
  <canvas data-percent="92" class="bar" width="200" height="200"></canvas>
</div>
<span class="label">Kandidaat Kopers</span>
            </div>
            <div class="pregress-counter-col"> 
<div class="circle2 bv-progress-bar">
  <span class="number">1578</span>
  <canvas data-percent="75" class="bar" width="200" height="200"></canvas>
</div> 
<span class="label">Verkochte panden</span>         
            </div>
            <div class="pregress-counter-col">
<div class="circle3 bv-progress-bar">
  <span class="number">7846</span>
  <canvas data-percent="78" class="bar" width="200" height="200"></canvas>
</div> 
<span class="label">Kandidaat Huurders</span>            
            </div>
            <div class="pregress-counter-col">
<div class="circle4 bv-progress-bar">
  <span class="number">897</span>
  <canvas data-percent="89" class="bar" width="200" height="200"></canvas>
</div>
<span class="label">Verhuurde panden</span>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>    
</section>


<section class="hm-grd-slider-sec">
  <div class="container-xlg">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-grd-slider-innr">
          <div class="slider-filter-bar hide-sm">
            <a class="active" href="#" value=".flhuizen">
              <span>Huizen</span>  <br>
              <strong>in de kijker</strong>
            </a>
            <a href="#" value=".flopkomede">
              <span>Opkomede</span> <br>
              <strong>Kijdagen</strong>
            </a>
          </div>
          <div class="sm-slider-filter-bar show-sm">
            <h1 class="huizen"><small>Huizen</small> <br> in de kijker</h1>
            <h1 class="opkomede"><small>Opkomede</small> <br> Kijdagen</h1>
            <div class="sm-filter-link">
              <a class="lft-filter active" href="#">Huizen in de kijker</a>
              <span class="switch-btn"><i></i></span>
              <a class="rgt-filter" href="#">Opkomede Kijdagen</a>            
            </div>
            <div class="hmGrdSlider-info-right show-sm">
              <ul class="ulc clearfix">
                <li>
                  <span class="key-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>Te koop</strong>
                </li>
                <li>
                  <span class="date-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-date-svg" width="23" height="23" viewBox="0 0 23 23" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-date-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>Verhuur</strong>
                </li>
                <li>
                  <span class="medel-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-medel-svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-medel-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>Realisaties</strong>
                </li>
              </ul>
            </div>
          </div>
          <div class="hmGrdSlider-wrap">
            <span class="hmGrdSliderLeftArrow">
              <svg class="dft-slider-left-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
                <use xlink:href="#dft-slider-left-arrow"></use>
              </svg>
            </span>
            <span class="hmGrdSliderRightArrow">
              <svg class="dft-slider-right-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
                <use xlink:href="#dft-slider-right-arrow"></use>
              </svg>
            </span>
            <div class="hmGrdSlider dft-slider-pagi">
              <div class="hmGrdSlider-item flhuizen green-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-001.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flopkomede sky-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">                    
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-002.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flhuizen green-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-001.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flopkomede green-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">                    
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-001.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flopkomede yellow-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">                    
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-002.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flopkomede green-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">                    
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-001.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hmGrdSlider-item flhuizen yellow-info">
                <div class="hmGrdSlider-grd">
                  <div class="hmGrdSlider-grd-img">                    
                    <div class="hmGrdSlider-grd-img-bg" style="background:url('<?php echo THEME_URI;  ?>/assets/images/hmGrdSlider-grd-img-002.jpg');"></div>
                    <a href="#" class="overlay-link"></a>
                    <div class="hm-grd-img-info-wrp">
                      <span class="key-info-grd-spn">
                        <i>  
                          <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                            <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                          </svg>
                        </i>
                        <strong>Te koop</strong>
                      </span>
                    </div>
                  </div>
                  <div class="hmGrdSlider-grd-des mHc text-uppercase">
                    <span>€ 276.600,00</span>
                    <h5><a href="#">WONING AALST</a></h5>
                    <ul class="ulc clearfix">
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-bed-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-bed-icon-svg"></use>
                          </svg>
                        </i>
                        <span>2-4 Slaapkamers</span>
                      </li>
                      <li>
                        <i>  
                          <svg class="hmGrdSlider-grd-tab-icon-svg" width="26" height="26" viewBox="0 0 26 26" fill="#7B7B7B">
                            <use xlink:href="#hmGrdSlider-grd-tab-icon-svg"></use>
                          </svg>
                        </i>
                        <span>1-3 Badkamers</span>
                      </li>
                    </ul>
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hmGrdSlider-info clearfix">
            <div class="hmGrdSlider-info-right hide-sm float-right">
              <ul class="ulc clearfix">
                <li>
                  <span class="key-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-key-svg" width="22.792" height="22.792" viewBox="0 0 22.792 22.792" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-key-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>Te koop</strong>
                </li>
                <li>
                  <span class="date-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-date-svg" width="23" height="23" viewBox="0 0 23 23" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-date-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>te huur</strong>
                </li>
                <li>
                  <span class="medel-info-bg">
                    <i>  
                      <svg class="hmGrdSlider-icon-medel-svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                        <use xlink:href="#hmGrdSlider-icon-medel-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <strong>Realisaties</strong>
                </li>
              </ul>
            </div>
            <div class="hmGrdSlider-info-left float-left">
              <a href="#">zoek meer huizen</a>
              <a href="#">
                <span>
                  <i>  
                    <svg class="hmGrdSlider-info-btn-svg" width="24" height="24" viewBox="0 0 24 24"  fill="#656565">
                      <use xlink:href="#hmGrdSlider-info-btn-svg"></use>
                    </svg>
                  </i>
                  Kunnen we helpen zoeken?
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php
  $reviewposter = get_field('review_afbeelding', HOMEID);
  $reviewpostertag = $reviewpostersrc = '';
  if(!empty($reviewposter)){ 
    $reviewpostersrc = cbv_get_image_src($reviewposter, 'hreview');
    $reviewpostertag = cbv_get_image_src($reviewposter, 'hreview');
  }
?>

<section class="hm-testimonial-sec">
  <div class="hm-testimonial-innr">
    <div class="hm-testimonial-img clearfix">
      <div class="hm-testimonial-img-innr">
        <div class="hm-testimonial-bg" style="background-image: url(<?php echo $reviewpostersrc; ?>);">
          <span>
            <?php echo $reviewpostertag; ?>
          </span>          
        </div>              
      </div>
    </div>
    <div class="hm-testimonial-main">
      <div class="hmTestimonialSlider-wrap clearfix">
        <div class="hmTestimonialSlider-wrap-innr">
          <span class="testimonialLeftArrow">
            <svg class="dft-slider-left-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
              <use xlink:href="#dft-slider-left-arrow"></use>
            </svg>
          </span>
          <span class="testimonialRightArrow">
            <svg class="dft-slider-right-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
              <use xlink:href="#dft-slider-right-arrow"></use>
            </svg>
          </span>

          <div class="hmTestimonialSlider dft-slider-pagi">
            <?php dynamic_sidebar('testimonial-widget'); ?>
          </div>                  
        </div>    
      </div>  
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'form'); ?>
<?php get_footer(); ?>