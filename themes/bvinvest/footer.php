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
  $hshow_telefoon = $fttelephone['htelephone'];
  $htelefoon = trim(str_replace($spacialArry, $replaceArray, $hshow_telefoon));
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $bwt = get_field('bwt', 'options');
  $smedias = get_field('sociale_media', 'options');
  $ftbottom = get_field('ftbottom', 'options');
  $stky_knop = get_field('sticky_knop', 'options');
  $selectpages = $stky_knop['select_pages'];
  $stkyknop = $stky_knop['knop'];

  $slug = '';
  $stkyknop_status = false;
  if ( is_page() ) $slug = get_queried_object()->post_name;
  if( $selectpages ):
    foreach($selectpages as $selectpage){
      if( $selectpage->post_name == $slug ){
        $stkyknop_status = true;
        break;
      } 
    }
  endif;

?>
<?php if($stky_knop && $stkyknop_status): ?>
<div class="hm-fixed-frem-con hide-md">
  <div class="hm-fixed-frem-innr">
    <span>
      <img src="<?php echo THEME_URI; ?>/assets/images/hm-fixed-frem.png" alt="">  
    </span>
    <a href="#">gratis waardebepaling</a>  
    <?php 
      if( is_array( $stkyknop ) &&  !empty( $stkyknop['url'] ) ){
        printf('<a href="%s" target="%s">%s</a>', $stkyknop['url'], $stkyknop['target'], $stkyknop['title']); 
      }
    ?>  
  </div>  
</div>
<?php endif; ?>
<!-- - md menu bar and pop up menu -- -->
<div class="md-popup-main-menu-wrap" style="display:none">
  <nav class="md-popup-main-nav clearfix">
   <?php 
    $menuOptions = array( 
        'theme_location' => 'cbv_main_menu', 
        'menu_class' => 'clearfix',
        'container' => 'hnav',
        'container_class' => 'hnav'
      );
    wp_nav_menu( $menuOptions ); 
  ?>
  </nav>
  <div class="md-popup-main-menu-ftr clearfix">
    <div class="md-popup-main-menu-btm clearfix">
      <?php 
        $menuOptions = array( 
            'theme_location' => 'cbv_top_menu', 
            'menu_class' => 'clearfix',
            'container' => 'tnav',
            'container_class' => 'tnav'
          );
        wp_nav_menu( $menuOptions ); 
      ?>
    </div>
  </div>
  <div class="md-popup-main-social-addr clearfix">
    <div class="md-popup-main-addr text-left">
      <ul class="clearfix ulc">
        <?php if( !empty( $email ) ): ?>
        <li>
          <a href="mailto:<?php echo $email; ?>">
            <i>
              <img src="<?php echo THEME_URI; ?>/assets/images/popup-main-addr-icon-1.svg" alt="">
            </i>
            <?php printf('<span>%s</span>', $email); ?>
          </a>
        </li>
        <?php endif; ?>
        <?php if( !empty( $hshow_telefoon ) ): ?>
        <li>
          <a href="tel:<?php echo $htelefoon; ?>">
            <i>
              <img src="<?php echo THEME_URI; ?>/assets/images/popup-main-addr-icon-2.svg" alt="">
            </i>
            <?php printf('<span>%s</span>', $hshow_telefoon); ?>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </div>    
    <div class="md-popup-main-social text-right">
      <?php if($smedias): ?>
        <?php foreach($smedias as $smedia): ?>
        <a target="_blank" href="<?php echo $smedia['url']; ?>">
          <?php echo $smedia['icon']; ?>
        </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="home-bnr-md-nav-bar-controller show-md">
  <div class="md-menu-btn-bar show-md clearfix">
      <div class="md-menu-btn-contact">
        <a href="#">
          <span> Gratis <br>waardebepaling</span>
        </a>
      </div>
      <div class="nav-opener-popup">
        <div class="nav-opener-innr"> 
          <div class="nav-opener-btn">
            <img src="<?php echo THEME_URI; ?>/assets/images/md-nav-opener-btn.svg" alt="">
          </div>
          <strong>MENU</strong>
        </div>
     </div>
    <div class="md-menu-close-btn-controller clearfix">
      <div class="fl-close-btn-wrp">
         <div class="fl-close-btn">
           <img src="<?php echo THEME_URI; ?>/assets/images/md-nav-close-btn.svg" alt="">
         </div>
         <strong>SLUIT</strong> 
      </div>
    </div> 
  </div>
</div>




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
                <?php if( !empty( $adres ) ) printf('<span><a target="_blank" href="%s">%s</a></span>', $gmaplink, $adres);  ?>
                <?php if( !empty( $e_mailadres ) ) printf('<span>E-mail: <a href="mailto:%s">%s</a></span>', $e_mailadres, $e_mailadres);  ?>
                <?php if( !empty( $show_telefoon ) ) printf('<span>Tel: <a href="tel:%s">%s</a></span>', $telefoon, $show_telefoon);  ?>
              </div>

              <div class="ftr-contact show-sm">
                <h5 class="show-sm">Contact</h5>
                <ul>
                  <?php if( !empty( $adres ) ) printf('<span><a target="_blank" href="%s">%s</a></span>', $gmaplink, $adres);  ?>
                  <?php if( !empty( $e_mailadres ) ) printf('<span>E-mail: <a href="mailto:%s">%s</a></span>', $e_mailadres, $e_mailadres);  ?>
                  <?php if( !empty( $show_telefoon ) ) printf('<span>Tel: <a href="tel:%s">%s</a></span>', $telefoon, $show_telefoon);  ?>
                  <div class="ftr-socail">
                    <?php if( !empty( $bwt ) ) printf('<span>BTW: %s</span>', $bwt);  ?>
                    <div class="socail">
                    <?php if($smedias): ?>
                      <?php foreach($smedias as $smedia): ?>
                      <a target="_blank" href="<?php echo $smedia['url']; ?>">
                        <?php echo $smedia['icon']; ?>
                      </a>
                      <?php endforeach; ?>
                    <?php endif; ?> 
                    </div>
                  </div>
                </ul>
              </div>

              <div class="ftr-socail hide-sm">
                <?php if( !empty( $bwt ) ) printf('<span>BTW: %s</span>', $bwt);  ?>
                <div class="socail">
                  <?php if($smedias): ?>
                      <?php foreach($smedias as $smedia): ?>
                      <a target="_blank" href="<?php echo $smedia['url']; ?>">
                        <?php echo $smedia['icon']; ?>
                      </a>
                      <?php endforeach; ?>
                    <?php endif; ?> 
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
          <div class="ftr-middel-inr">
            <div class="ftr-middel-lft clearfix">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>  
            </div>
            <div class="ftr-middel-lft">
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
              <a target="_blank" href="#">webdesign by conversal</a>
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