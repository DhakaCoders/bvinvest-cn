<?php 
/*
  Template Name: Gratis Waardbepaling
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php 
get_template_part('templates/breadcrumbs'); 

$gwform = get_field('gwform', $thisID);
?>

<section class="gw-form-sec-wrp">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form-inr clearfix">
          
          <div class="contact-form-rgt clearfix">
            <div class="contact-form-dsc">
              <?php 
                if( !empty( $gwform['titel'] ) ) printf( '<h1>%s</h1>', $gwform['titel']); 
                if( !empty( $gwform['beschrijving'] ) ) echo wpautop( $gwform['beschrijving'], true ); 
              ?>
            </div>
            <div class="contact-form-wrp gw-form-wrp clearfix" id="contact-wpform">
              <div class="wpforms-container">
              <?php 
                if( !empty( $gwform['shortcode'] ) ) echo do_shortcode( $gwform['shortcode'] ); 
              ?>
              </div>
            </div>
          </div>
          <?php 
            $kandidaat = get_field('kandidaat_huurders', $thisID);
          ?>
          <div class="contact-form-lft">
            <div class="progrees-bar-wrp">
              <div class="circle5 bv-progress-bar center bvp-loaded">
              <?php 
                if( !empty( $kandidaat['aantal'] ) ) printf( '<span class="number">%s</span>', $kandidaat['aantal']); 
                if( !empty( $kandidaat['percentage'] ) ) printf( '<canvas data-percent="%s" class="bar" width="200" height="200"></canvas>', $kandidaat['percentage']); 
              ?>  
              </div>
              <?php if( !empty( $kandidaat['titel'] ) ) printf( '<span class="label">%s</span> ', $kandidaat['titel']); ?>                      
            </div>
            <?php 
              $inforepeater = get_field('info_repeater', $thisID);
              $infos = $inforepeater['inforepeater'];
              if(  $infos ):

              foreach( $infos as $info ):
            ?>
            <div class="gw-dsc-box">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/gw-dsc-box-check.svg">
              </i>
              <?php 
                if( !empty( $info['beschrijving'] ) ) echo do_shortcode( $info['beschrijving'] ); 
              ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>