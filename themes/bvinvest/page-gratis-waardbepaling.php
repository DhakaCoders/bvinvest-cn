<?php 
/*
  Template Name: Gratis Waardbepaling
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

<section class="gw-form-sec-wrp">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form-inr clearfix">
          
          <div class="contact-form-rgt clearfix">
            <div class="contact-form-dsc">
              <h1>Gratis waardebepaling</h1>
              <p>B&V Invest komt graag langs voor een <strong>gratis waardebepaling</strong> van uw pand. We geven u graag ook nuttige tips voor de verdere verkoop of verhuur van uw eigendom. Vul onderstaand formulier in of contacteer ons rechtstreeks via <strong>053 / 700 002</strong>.</p>
            </div>
            <div class="contact-form-wrp gw-form-wrp clearfix" id="contact-wpform">
              <div class="wpforms-container">
                <?php echo do_shortcode('[wpforms id="161" title="false" description="false"]'); ?>
              </div>
            </div>
          </div>
          <div class="contact-form-lft">
            <div class="progrees-bar-wrp">
              <div id="container5"></div>
              <span>Kandidaat Huurders</span>                       
            </div>
            <div class="gw-dsc-box">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/gw-dsc-box-check.svg">
              </i>
              <p>Nunc non purus posuere nisl aliquet iaculis in at justo.</p>
            </div>
            <div class="gw-dsc-box">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/gw-dsc-box-check.svg">
              </i>
              <p>Suspendisse faucibus tortor vel enim sollicitudin, vel varius eros aliquet.</p>
            </div>
            <div class="gw-dsc-box">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/gw-dsc-box-check.svg">
              </i>
              <p>Quisque viverra tempor est, quis vulputate massa mollis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>