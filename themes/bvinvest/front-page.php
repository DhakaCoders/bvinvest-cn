<?php 
get_header(); 
?>

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
          <?php 
            get_template_part( 'templates/form', 'search' );
          ?>
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
    $intropostertag = cbv_get_image_tag($intro['afbeelding'], 'hintro');
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


<?php
get_template_part('templates/home', 'counters');
get_template_part('templates/home', 'slider');
?>

<?php
  $reviewposter = get_field('review_afbeelding', HOMEID);
  $reviewpostertag = $reviewpostersrc = '';
  if(!empty($reviewposter)){ 
    $reviewpostersrc = cbv_get_image_src($reviewposter, 'hreview');
    $reviewpostertag = cbv_get_image_tag($reviewposter, 'hreview');
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
            <?php 
            //dynamic_sidebar('dshop-widget'); 
            echo do_shortcode('[reviews_rating review_item_order="text first" avatar="no" attribution="no" date="false" summary="no" icon="no" name="no" vicinity="no" 
              html_tags="h3, h3, h3, div, div"]');
            ?>
          </div>                  
        </div>    
      </div>  
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'form'); ?>
<?php get_footer(); ?>