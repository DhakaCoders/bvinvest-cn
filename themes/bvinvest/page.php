<?php 
get_header();
while ( have_posts() ) :
  the_post();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="innerpage-con-wrap">
  <span class="innerpage-rgt-top-gray-bg"></span>
  <?php if(have_rows('inhoud')){  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <?php 
            while ( have_rows('inhoud') ) : the_row(); 
          if( get_row_layout() == 'introductietekst' ){
              $title = get_sub_field('titel');
              $subtitel = get_sub_field('subtitel');
              $afbeelding = get_sub_field('afbeelding');
              echo '<div class="dfp-promo-module clearfix">';
                if( !empty($subtitel) ) printf('<strong>%s</strong>', $subtitel);
                if( !empty($title) ) printf('<h1>%s</h1>', $title);
                if( !empty($afbeelding) ){
                  echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
                }
              echo '</div>';    
          }elseif( get_row_layout() == 'teksteditor' ){
              $beschrijving = get_sub_field('fc_teksteditor');
              echo '<div class="dfp-text-module clearfix">';
                if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
              echo '</div>';    
            }elseif( get_row_layout() == 'afbeelding_tekst' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
              $fc_tekst = get_sub_field('fc_tekst');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">
                <div class="fl-dft-lftimg-rgtdes clearfix equalHeight '.$imgposcls.'">';
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');"></div>';
                      echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                        echo wpautop($fc_tekst);
                      echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'galerij' ){
              $gallery_cn = get_sub_field('afbeeldingen');
              $lightbox = get_sub_field('lightbox');
              $kolom = get_sub_field('kolom');
              if( $gallery_cn ):
              echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                foreach( $gallery_cn as $image ):
                $imgsrc = cbv_get_image_src($image['ID'], 'dfpageg1');  
                echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    echo wp_get_attachment_image( $image['ID'], 'dfpageg1' );
                if( $lightbox ) echo "</a>";
                echo "</div></figure>";
                endforeach;
              echo "</div></div>";
              endif;      
            }elseif( get_row_layout() == 'countdown' ){
              $fc_counts = get_sub_field('fc_countdown');
              echo "<div class='dfp-progress-area-ctlr'><div class='dfp-progress-area-slider dfpProgressAreaSlider'>";
              $i = 1;
                foreach( $fc_counts as $fccount ):
                  echo "<div class='dfp-progress-area-slide-item'><div class='pregress-counter-col'><div class='circle".$i." bv-progress-bar center'>";
                    echo '<span class="number">'.$fccount['aantal'].'</span>';
                    echo "<canvas data-percent='".$fccount['percentage']."' class='bar' width='200' height='200'></canvas>";
                    echo "</div>";
                    echo '<span class="label">'.$fccount['titel'].'</span>';
                  echo "</div></div>";
                  $i++;
                endforeach;
              echo "</div></div>";
            }elseif( get_row_layout() == 'quote' ){
          echo '<div class="dfp-testi-cntlr"><div class="hmTestimonialSlider-wrap">
              <span class="testimonialLeftArrow">
                <svg class="dft-slider-left-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
                  <use xlink:href="#dft-slider-left-arrow"></use>
                </svg>
              </span>
              <span class="testimonialRightArrow">
                <svg class="dft-slider-right-arrow" width="18" height="33" viewBox="0 0 18 33" fill="#C4C4C4">
                  <use xlink:href="#dft-slider-right-arrow"></use>
                </svg>
              </span>';

              echo '<div class="hmTestimonialSlider">';
              $fcquotes = get_sub_field('fcquote');
              foreach( $fcquotes  as $fcquote):
                  echo '<div class="hmTestimonialSlider-item">
                    <i>  
                      <svg class="testimonial-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#656565">
                        <use xlink:href="#testimonial-icon-svg"></use>
                      </svg>
                    </i>';
                    if( !empty( $fcquote['fc_quote'] ) ) echo wpautop($fcquote['fc_quote']);
                    echo '<ul class="ulc clearfix testimonial-ratings">';
                      if($fcquote['select_review_number'] == 1):
                      echo '<li><i class="fa fa-star"></i></li>';
                      elseif($fcquote['select_review_number'] ==2):
                      echo '<li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>';
                      elseif($fcquote['select_review_number'] == 3):
                      echo '<li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>';
                      elseif($fcquote['select_review_number'] == 4):
                      echo '<li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>';
                      elseif($fcquote['select_review_number'] == 5):
                      echo '<li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>';
                      endif;
                    echo '</ul>';
                   if( !empty( $fcquote['naam'] ) ) printf('<strong>%s<span>- %s</span></strong>', $fcquote['naam'], $fcquote['subtitel']);
                   echo '</div>';
                  endforeach;
                  echo '</div></div></div>';
            }elseif( get_row_layout() == 'promo' ){
              $fc_title = get_sub_field('fc_title');
              $fc_beschrijving = get_sub_field('fc_beschrijving');
              $fc_knop = get_sub_field('fc_knop');
              $achtergrond = get_sub_field('achtergrond');
              echo "<div class='dft-bnr-con' style='background-image: url({$achtergrond});'>";
              printf('<h3>%s</h3>', $fc_title);
              echo wpautop( $beschrijving );
              printf('<a target="%s" href="%s">%s</a>', $fc_knop['target'], $fc_knop['url'], $fc_knop['title']);
              echo "</div>";
            }elseif( get_row_layout() == 'table' ){
              $fc_table = get_sub_field('fc_table');
              cbv_table($fc_table);
            }elseif( get_row_layout() == 'product' ){
              $fc_product = get_sub_field('fc_product');
              if( $fc_product ):
                $pgridsrc = $pgridicon = $infopicon = '';
                echo '<div class="dfp-grd-slider-ctlr"><div class="dfp-grd-slider dfpGrdSlider">';
                  $i = 1;
                  foreach ($fc_product as $key => $product) {
                    $knop1 = $product['knop'];
                    $plink = 'javascript:void();';
                    $addclass = ' green';
                    if( $i == 2 ) $addclass = ' sky'; 
                    if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                      $plink = $knop1['url'];
                    } 
                    if(!empty($product['afbeelding'])) $pgridsrc = cbv_get_image_src($product['afbeelding'], 'historiek');

                    if(!empty($product['icon'])) $pgridicon = cbv_get_image_tag($product['icon']);
                    $pinfo = $product['product_info'];
                    echo '<div class="dfp-grd-slide-item'.$addclass.'"><div class="bvi-grd-item">';
                    echo '<div class="bvi-grd-item-img-ctlr">';
                    echo '<a href="'.$plink.'" class="overlay-link"></a>';
                    echo '<div class="bvi-grd-item-img" style="background: url('.$pgridsrc.');"></div>';
                    echo '<div class="bvi-grid-key-info-ctlr">
                    <div class="bvi-grd-icon"></div>
                    <div class="bvi-grd-key-date clearfix">
                      <div class="bvi-grd-key">
                        <i>'.$pgridicon.'</i>
                        <span>'.$product['icon_titel'].'</span>
                      </div>
                    </div> 
                    </div>';
                    echo '</div>';

                    echo '<div class="mHc bvi-grd-item-des">
                  <strong>€ '.$product['prijs'].'</strong>
                  <h5><a href="'.$plink.'">'.$product['titel'].'</a></h5>
                  <div class="bvi-grd-item-feature clearfix">';
                    if($pinfo):
                      foreach ($pinfo as $key => $infop) {
                        if(!empty($infop['icon'])) $infopicon = cbv_get_image_tag($infop['icon']);
                      echo '<div class="bvi-grd-item-feature-item">
                        <i>'.$infopicon.'</i>
                        <span>'.$infop['titel'].'</span>
                      </div>';
                      }
                    endif;
                  echo '</div>';

                  if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                    printf('<div class="bvi-grd-item-des-link"><a href="%s" target="%s">%s</a></div>', $knop1['url'], $knop1['target'], $knop1['title']); 
                  }


                  echo '</div></div></div>';
                  $i++;
                  }

                echo '</div></div>';
              endif;
            }elseif( get_row_layout() == 'afbeelding' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty( $fc_afbeelding ) ){
                printf('<div class="dfp-plate-one-img-bx">%s</div>', cbv_get_image_tag($fc_afbeelding));
              }
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $rheight = get_sub_field('fc_horizontal_rule');
              printf('<div class="dfhrule clearfix" style="height: %spx;"></div>', $rheight);
          
            }elseif( get_row_layout() == 'gap' ){
             $gap = get_sub_field('fc_gap');
             printf('<div class="gap clearfix" data-value="20" data-md="20" data-sm="20" data-xs="10" data-xxs="10"></div>', $rheight);
            }
          
           endwhile;?>
        </article>

      </div>
    </div>
  </div>
<?php } ?>
</section>
<?php 
endwhile; 
?>
<?php get_template_part('templates/footer', 'form'); ?>
<?php
get_footer(); 
?>