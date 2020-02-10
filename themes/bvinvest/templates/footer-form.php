<?php 
$gratis = get_field('gratis_waardebepaling', 'options');
?>
<section class="footer-top-form-sec-wrp" style="background: url(<?php echo THEME_URI; ?>/assets/images/footer-top-form-bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="footer-top-form-inr clearfix">
          <div class="footer-form-wrp">
           <div class="ftr-top-frm-dsc">
              <?php 
                if( !empty( $gratis['titel'] ) ) printf( '<h4>%s</h4>', $gratis['titel']); 
                if( !empty( $gratis['beschrijving'] ) ) echo wpautop( $gratis['beschrijving'], true ); 
              ?>
            </div>
          <div class="ftr-top-form clearfix" id="ftr-top-wpform">
            
            <div class="wpforms-container">
            <?php if( !empty( $gratis['form_sortcode'] ) ) echo do_shortcode( $gratis['form_sortcode'] ); ?>
            <div class="ftr-form-msg">
              <p>We contacteren u binnen de <br> werkdag!</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>