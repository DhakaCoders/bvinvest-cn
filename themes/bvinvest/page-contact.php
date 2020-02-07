<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
?>
<section class="bradecumb-sec-wrp">
  <div class="container-lg">
    <div class="row">
      <div class="col-sm-12">
        <div class="bradecumb-inr clearfix">
          <div class="bradecumb">
            <a href="#">
              <i>  
                <svg class="home-bradecumb-svg" width="25" height="25" viewBox="0 0 25 25" fill="#fff">
                  <use xlink:href="#home-bradecumb-svg"></use>
                </svg>
              </i>
            </a>
            <ul class="clearfix">          
              <li><a href="#">Home</a></li>
              <li><a href="#">Binnenpagina</a></li>
              <li><a href="#">Binnenpagina</a></li>
            </ul>
          </div>
          <div class="bradecumb-btn">
            <a href="#">
              <i>  
                <svg class="bradecumb-ary-svg" width="18" height="14" viewBox="0 0 18 14" fill="#fff">
                  <use xlink:href="#bradecumb-ary-svg"></use>
                </svg>
              </i>
            Terug</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form-inr clearfix">
          <div class="contact-form-rgt clearfix">
            <div class="contact-form-dsc">
              <h1>Contact</h1>
              <p>Bel ons op <strong>053 70 00 02,</strong> stuur een e-mail naar <a href="mailto:info@bvinvest.be"> info@bvinvest.be </a>of vul onderstaand contactformulier in!</p>
            </div>
            <div class="contact-form-wrp clearfix" id="contact-wpform">
              <div class="wpforms-container">
                <?php echo do_shortcode('[wpforms id="166" title="false" description="false"]'); ?>
              </div>
            </div>
          </div>
          <div class="contact-form-lft">
            <div class="contact-form-info">
              <span>E-mail: <a href="mailto:info@bvinvest.be">info@bvinvest.be</a></span>
              <span>Tel: <a href="tel:053/700002">053/700002</a></span>
              <span>BTW: <strong>BE0817951807</strong></span>
              <div class="contact-socail">
                <a href="#">
                    <i>  
                      <svg class="ftr-fb-icon-svg" width="14" height="22" viewBox="0 0 14 22" fill="#7B7B7B">
                        <use xlink:href="#ftr-fb-icon-svg"></use>
                      </svg>
                    </i>
                  </a>
                  <a href="#">
                    <i>  
                      <svg class="ftr-ins-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#7B7B7B">
                        <use xlink:href="#ftr-ins-icon-svg"></use>
                      </svg>
                    </i>
                  </a>
              </div>
            </div>
            <div class="contact-map-location">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/contact-map-icon.png">
              </i>
              <h6>B&V Invest bvba</h6>
              <span>eizersplein 21 <br> 9300 Aalst</span>
              <a href="#">Routebeschrijving</a>
            </div>
            <div class="contact-lft-img" style="background:url(<?php echo THEME_URI; ?>/assets/images/contact-lft-img.png);">
              <img src="<?php echo THEME_URI; ?>/assets/images/contact-lft-img.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="contact-google-map-wrp">
  <div id="googlemap" data-latitude="38.03898" data-longitude="23.804699"></div>
</section>
<?php get_footer(); ?>