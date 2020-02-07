<?php 
/*
  Template Name: Overons
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

<?php
  $intro = get_field('intro', $thisID);
  if( $intro ):
    $galleries = $intro['gallery'];
?>
<section class="over-ons-two-part-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="over-ons-two-part-innr clearfix"> 
          <?php if( $galleries ): ?>
          <div class="over-ons-lft clearfix">
            <?php 
            $i = 1; 
            foreach( $galleries as $gallery ): 
            if($i == 1){
              $gallerytag1 = '';
              if(!empty($gallery)) $gallerytag1 = cbv_get_image_src($gallery, 'overonsgallery1');
            ?>
            <div class="over-ons-lft-img" style="background: url(<?php echo $gallerytag1; ?>);">
            </div>
            <?php break;} $i++; endforeach; ?>
            <div class="over-ons-lft-btm-img-wrp clearfix">
              <?php 
              $i = 1; 
              foreach( $galleries as $gallery ): 
              if($i != 1){
              $gallerytag2 = '';
              if(!empty($gallery)) $gallerytag2 = cbv_get_image_src($gallery, 'overonsgallery2');
              ?>
              <div class="over-ons-lft-btm-inr">
                <div class="over-ons-lft-btm-img" style="background: url(<?php echo $gallerytag2; ?>);"></div>
              </div>
              <?php continue;} $i++; endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="over-ons-rgt">
            <?php 
              if( !empty( $intro['subtitel'] ) ) printf( '<h4>%s</h4>', $intro['subtitel']); 
              if( !empty( $intro['titel'] ) ) printf( '<h1>%s</h1>', $intro['titel']); 
              if( !empty( $intro['beschrijving'] ) ) echo wpautop( $intro['beschrijving'], true ); 
            ?>    
            <div class="over-ons-btn"> 
              <?php 
                $knop1 = $intro['knop_1'];
                $knop2 = $intro['knop_2'];

                if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop1['url'], $knop1['target'], $knop1['title']); 
                }
                if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop2['url'], $knop2['target'], $knop2['title']); 
                }

              ?>
            </div>          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $herschil = get_field('het_verschil', $thisID);
  if( $herschil ):
    $alleverschils = $herschil['alle_verschil'];
?>
<section class="over-ons-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="over-ons-service-head">
          <?php 
            if( !empty( $herschil['titel'] ) ) printf( '<h4>%s</h4>', $herschil['titel']); 
            if( !empty( $herschil['beschrijving'] ) ) echo wpautop( $herschil['beschrijving'], true ); 
          ?>
        </div>
      </div>
    </div>
    <?php if( $alleverschils ){ ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="over-ons-service-wrp">
          <ul>
            <?php 
              foreach( $alleverschils as $alle ): 
              $verschiltag = '';
              if(!empty($alle['icon'])) $verschiltag = cbv_get_image_tag($alle['icon']);
            ?>
            <li>
              <div class="over-ons-service-dsc">
                <?php if( !empty($verschiltag) ): ?>
                <span>
                  <i>
                    <?php echo $verschiltag; ?>
                  </i>
                </span>
                <?php endif; 
                  if( !empty($alle['titel']) ) printf('<h5>%s</h5>', $alle['titel']);
                  if( !empty($alle['beschrijving']) ) echo wpautop( $alle['beschrijving'] );
                ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
<?php endif; ?>

<div class="middleElement"></div>
<?php
  $historiek = get_field('historiek', $thisID);
  if( $historiek ):
    $allehistorieks = $historiek['alle_historiek'];
?>
<section class="history-timeline-sec"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="history-timeline-innr">
          <div class="history-timeline-top"> 
          <?php 
            if( !empty( $historiek['titel'] ) ) printf( '<h2>%s</h2>', $historiek['titel']);  
          ?>
          </div>
          <?php if( $allehistorieks ){ ?>
          <div class="history-timeline-main-wrp">
            <div class="history-timeline-main historyInit">
              <div class="firstLine"></div>
              <div class="activeLine"></div>
              <ul class="ulc clearfix">
                <?php 
                foreach( $allehistorieks as $alleks ): 
                  $allekstag = '';
                  if(!empty($alleks['afbeelding'])) $allekstag = cbv_get_image_tag($alleks['afbeelding'], 'historiek');
                ?>
                <li class="clearfix">
                  <div class="time-line-wrp clearfix">
                    <div class="time-line-des"> 
                      <?php 
                        if( !empty($alleks['titel']) ) printf('<h3><span>%s</span></h3>', $alleks['titel']);
                        if( !empty($alleks['titel']) ) printf('<h5>%s</h5>', $alleks['titel']);
                        if( !empty($alleks['beschrijving']) ) echo wpautop( $alleks['beschrijving'] );
                      ?>
                    </div>
                    <div class="time-line-img">
                      <?php echo $allekstag; ?>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('templates/footer', 'form'); ?>
<?php get_footer(); ?>