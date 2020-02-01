<?php 
  $logoObj = get_field('logo_footer', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $fttelephone = get_field('telephone', 'options');
  $show_telefoon = $fttelephone['ftelephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $bwt = get_field('bwt', 'options');
  $smedias = get_field('sociale_media', 'options');
  $ftbottom = get_field('ftbottom', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <div class="ftr-col-innr clearfix">
              <div class="ftr-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <div class="ftr-col-dsc ftr-menu-item">
                <h5 class="show-sm">Navigatie</h5>
                <?php 
                  $fmenuOptions = array( 
                      'theme_location' => 'cbv_ft_menu1', 
                      'menu_class' => 'ulc',
                      'container' => 'fnav',
                      'container_class' => 'fnav'
                    );
                  wp_nav_menu( $fmenuOptions ); 

                  $fpmenuOptions = array( 
                      'theme_location' => 'cbv_ft_menu2', 
                      'menu_class' => 'ulc clearfix',
                      'container' => false,
                      'container_class' => ''
                    );
                  wp_nav_menu( $fpmenuOptions ); 
                ?>
              </div>
              <div class="ftr-col-dsc ftr-contact hide-sm">
                <?php if( !empty( $adres ) ) printf('<span><a href="%s">%s</a></span>', $gmaplink, $adres);  ?>
                <?php if( !empty( $e_mailadres ) ) printf('<span>E-mail: <a href="mailto:%s">%s</a></span>', $e_mailadres, $e_mailadres);  ?>
                <?php if( !empty( $show_telefoon ) ) printf('<span>Tel: <a href="tel:%s">%s</a></span>', $telefoon, $show_telefoon);  ?>
              </div>

              <div class="ftr-contact show-sm">
                <h5 class="show-sm">Contact</h5>
                <ul>
                  <?php if( !empty( $adres ) ) printf('<span><a href="%s">%s</a></span>', $gmaplink, $adres);  ?>
                  <?php if( !empty( $e_mailadres ) ) printf('<span>E-mail: <a href="mailto:%s">%s</a></span>', $e_mailadres, $e_mailadres);  ?>
                  <?php if( !empty( $show_telefoon ) ) printf('<span>Tel: <a href="tel:%s">%s</a></span>', $telefoon, $show_telefoon);  ?>
                  <div class="ftr-socail">
                    <?php if( !empty( $bwt ) ) printf('<span>BTW: %s</span>', $bwt);  ?>
                    <div class="socail">
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
                </ul>
              </div>

              <div class="ftr-socail hide-sm">
                <?php if( !empty( $bwt ) ) printf('<span>BTW: %s</span>', $bwt);  ?>
                <div class="socail">
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
            </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="ftr-middel-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-middel-inr clearfix">
            <div class="ftr-middel-lft clearfix">
            <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            <?php 
              $ftmenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'clearfix',
                  'container' => 'copynav',
                  'container_class' => 'copynav'
                );
              wp_nav_menu( $ftmenuOptions ); 
            ?>  
            </div>
            <div class="ftr-middel-rgt">
              <a href="#">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-btm-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-btm-inr">
            <?php if( !empty($ftbottom['beschrijving']) ) echo wpautop( $ftbottom['beschrijving'] )?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>