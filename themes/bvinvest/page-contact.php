<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<?php
  $gwform = get_field('gwform', $thisID);
  $afbeelding = get_field('afbeelding', $thisID);
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $email = get_field('emailaddress', 'options');
  $fttelephone = get_field('telephone', 'options');
  $show_telefoon = $fttelephone['ftelephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $bwt = get_field('bwt', 'options');
  $smedias = get_field('sociale_media', 'options');
  $google_map = get_field('gmap', $thisID);


  $sidebarimg = $sidebartag ='';
  if(!empty($afbeelding)){
    $sidebarimg = cbv_get_image_src($afbeelding, 'ontactsidebar');
    $sidebartag = cbv_get_image_tag($afbeelding, 'ontactsidebar');
  }
?>
<section class="contact-form-sec-wrp">
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
            <div class="contact-form-wrp clearfix" id="contact-wpform">
              <div class="wpforms-container">
              <?php if( !empty( $gwform['shortcode'] ) ) echo do_shortcode( $gwform['shortcode'] ); ?>
              </div>
            </div>
          </div>

          <div class="contact-form-lft">
            <div class="contact-form-info">
              <?php if( !empty($email) ) printf('<span>E-mail: <a href="mailto:%s">%s</a></span>', $email, $email); ?>
              <?php if( !empty($show_telefoon) ) printf('<span>Tel: <a href="tel:%s">%s</a></span>', $telefoon, $show_telefoon); ?>
              <?php if( !empty($bwt) ) printf('<span>BTW: <strong>%s</strong></span>', $bwt); ?>
              <div class="contact-socail">
                <?php if($smedias): ?>
                  <?php foreach($smedias as $smedia): ?>
                  <a target="_blank" href="<?php echo $smedia['url']; ?>">
                    <?php echo $smedia['icon']; ?>
                  </a>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="contact-map-location">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/contact-map-icon.png">
              </i>
              <?php _e('<h6>B&V Invest bvba</h6>', THEME_NAME);?>
              <?php if( !empty( $adres ) ) printf('<span>%s</span>', $adres);  ?>
              <a target="_blank" href="<?php echo $gmaplink; ?>">Routebeschrijving</a>
            </div>
            <div class="contact-lft-img" style="background:url(<?php echo $sidebarimg; ?>);">
              <?php echo $sidebartag; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php if( !empty($google_map) && $google_map):?>
<section class="contact-google-map-wrp">
  <div data-marker="<?php echo THEME_URI; ?>/assets/images/map-marker.png" id="googlemap" data-latitude="<?php echo $google_map['lat']; ?>" data-longitude="<?php echo $google_map['lng']; ?>"></div>
</section>
<?php endif; ?>
<?php get_footer(); ?>