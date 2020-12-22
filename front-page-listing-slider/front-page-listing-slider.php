<?php
  
  $default = '';
  
  add_action('front-page-carousel', 'add_front_page_listing_slider');
  function add_front_page_listing_slider() {
  
    $default = ''; ?>
    
    <div id="front-page-listing-carousel" class="container">
      <div class="col-md-12">
        <div class="well">
          <div id="fp-featured-carousel" class="carousel slide">
          
            <!-- Carousel items -->
            
            <div class="carousel-inner">
            
            <?php $fp_one_image = get_theme_mod('featured_property_one');
                  if($fp_one_image !== $default) { ?>
                  
              <div class="item active">
                <div class="row">
                  <div class="col-sm-3">
                  
                  <?php $fp_one_image = get_theme_mod('featured_property_one');
                        $feature1_id = attachment_url_to_postid($fp_one_image);
                        $image_one_alt  = get_post_meta( $feature1_id, '_wp_attachment_image_alt', true ); ?>
                    
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_one_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_one')); ?>" alt="<?php echo $image_one_alt ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_one_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_one_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_one_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_one_desc'); ?></p>
                    
                  </div>
                  <?php $fp_two_image = get_theme_mod('featured_property_two');
                    if($fp_two_image !== $default) { ?>
                    
                  <div class="col-sm-3">
  
                    <?php $fp_two_image = get_theme_mod('featured_property_two');
                          $feature2_id = attachment_url_to_postid($fp_two_image);
                          $image_two_alt  = get_post_meta( $feature2_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_two_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_two')); ?>" alt="<?php echo $image_two_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_two_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_two_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_two_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_two_desc'); ?></p>
                    
                    
                  </div>
                    <?php }
                    $fp_three_image = get_theme_mod('featured_property_three');
                    if($fp_three_image !== $default) { ?>
                    
                  <div class="col-sm-3">
  
                    <?php $fp_three_image = get_theme_mod('featured_property_three');
                          $feature3_id = attachment_url_to_postid($fp_three_image);
                          $image_three_alt  = get_post_meta( $feature3_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_three_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_three')); ?>" alt="<?php echo $image_three_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_three_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_three_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_three_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_three_desc'); ?></p>
                    
                    
                  </div>
                  
                  <?php }
                  $fp_four_image = get_theme_mod('featured_property_four');
                  if($fp_four_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                    <?php $fp_four_image = get_theme_mod('featured_property_four');
                      $feature4_id = attachment_url_to_postid($fp_four_image);
                      $image_four_alt  = get_post_meta( $feature4_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_four_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_four')); ?>" alt="<?php echo $image_four_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_four_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_four_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_four_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_four_desc'); ?></p>
                    
                  </div>
                  
                  <?php } ?>
                  
                </div>
                <!--/row-->
              </div>
                <!--/item-->
                
              <?php }
              $fp_five_image = get_theme_mod('featured_property_five');
              if ($fp_five_image !== $default) { ?>
             
              <div class="item">
                <div class="row">
                  <div class="col-sm-3">
  
                    <?php $fp_five_image = get_theme_mod('featured_property_five');
                      $feature5_id = attachment_url_to_postid($fp_five_image);
                      $image_five_alt  = get_post_meta( $feature5_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_five_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_five')); ?>" alt="<?php echo $image_five_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_five_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_five_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_five_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_five_desc'); ?></p>
                    
                  </div>
  
                  <?php $fp_six_image = get_theme_mod('featured_property_six');
                        if ($fp_six_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                    <?php $fp_six_image = get_theme_mod('featured_property_six');
                      $feature6_id = attachment_url_to_postid($fp_six_image);
                      $image_six_alt  = get_post_meta( $feature6_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_six_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_six')); ?>" alt="<?php echo $image_six_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_six_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_six_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_six_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_six_desc'); ?></p>
                    
                  </div>
                  
                  <?php }
                  $fp_seven_image = get_theme_mod('featured_property_seven');
                  if ($fp_seven_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                    <?php $fp_seven_image = get_theme_mod('featured_property_seven');
                      $feature7_id = attachment_url_to_postid($fp_seven_image);
                      $image_seven_alt  = get_post_meta( $feature7_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_seven_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_seven')); ?>" alt="<?php echo $image_seven_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_seven_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_seven_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_seven_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_seven_desc'); ?></p>
                    
                  </div>
                  
                  <?php }
                  $fp_seven_image = get_theme_mod('featured_property_seven');
                  if ($fp_seven_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                  <?php $fp_eight_image = get_theme_mod('featured_property_eight');
                    $feature8_id = attachment_url_to_postid($fp_eight_image);
                    $image_eight_alt  = get_post_meta( $feature8_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_eight_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_eight')); ?>" alt="<?php echo $image_eight_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_eight_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_eight_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_eight_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_eight_desc'); ?></p>
                    
                  </div>
                  
                  <?php } ?>
                  
                </div>
                <!--/row-->
              </div>
              <!--/item-->
              
              <?php }
              $fp_nine_image = get_theme_mod('featured_property_nine');
              if ($fp_nine_image !== $default) { ?>
              
              <div class="item">
                <div class="row">
                  <div class="col-sm-3">
              
                    <?php $fp_nine_image = get_theme_mod('featured_property_nine');
                      $feature9_id = attachment_url_to_postid($fp_nine_image);
                      $image_nine_alt  = get_post_meta( $feature9_id, '_wp_attachment_image_alt', true ); ?>
              
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_nine_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_nine')); ?>" alt="<?php echo $image_nine_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_nine_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_nine_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_nine_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_nine_desc'); ?></p>
                    
                  </div>
                  <?php $fp_ten_image = get_theme_mod('featured_property_ten');
                        if ($fp_ten_image !== $default) { ?>
                        
                  <div class="col-sm-3">
              
                    <?php $fp_ten_image = get_theme_mod('featured_property_ten');
                          $feature10_id = attachment_url_to_postid($fp_ten_image);
                          $image_ten_alt  = get_post_meta( $feature10_id, '_wp_attachment_image_alt', true ); ?>
              
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_ten_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_ten')); ?>" alt="<?php echo $image_ten_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_ten_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_ten_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_ten_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_ten_desc'); ?></p>
                    
                  </div>
                  
                  <?php }
                  $fp_eleven_image = get_theme_mod('featured_property_eleven');
                  if ($fp_eleven_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                    <?php $fp_eleven_image = get_theme_mod('featured_property_eleven');
                      $feature11_id = attachment_url_to_postid($fp_eleven_image);
                      $image_eleven_alt  = get_post_meta( $feature11_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_eleven_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_eleven')); ?>" alt="<?php echo $image_eleven_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_eleven_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_eleven_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_eleven_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_eleven_desc'); ?></p>
                  
                  </div>
                  
                  <?php }
                  $fp_twelve_image = get_theme_mod('featured_property_twelve');
                  if ($fp_twelve_image !== $default) { ?>
                  
                  <div class="col-sm-3">
  
                    <?php $fp_twelve_image = get_theme_mod('featured_property_twelve');
                      $feature12_id = attachment_url_to_postid($fp_twelve_image);
                      $image_twelve_alt  = get_post_meta( $feature12_id, '_wp_attachment_image_alt', true ); ?>
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_twelve_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_twelve')); ?>" alt="<?php echo $image_twelve_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_twelve_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_twelve_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_twelve_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_twelve_desc'); ?></p>
                    
                  </div>
                  
                  <?php } ?>
                  
                </div>
                <!--/row-->
              </div>
              <!--/item-->
              <?php } ?>
              
              <div class="item">
                <div class="row">
                  <div class="col-sm-3">
        
                    <?php $fp_thirteen_image = get_theme_mod('featured_property_thirteen');
                      $feature13_id = attachment_url_to_postid($fp_thirteen_image);
                      $image_thirteen_alt  = get_post_meta( $feature13_id, '_wp_attachment_image_alt', true ); ?>
        
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_thirteen_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_thirteen')); ?>" alt="<?php echo $image_thirteen_alt; ?>" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_thirteen_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_thirteen_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_thirteen_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_thirteen_desc'); ?></p>
                    
                  </div>
                  <?php $fp_fourteen_image = get_theme_mod('featured_property_fourteen');
                    if ($fp_fourteen_image !== $default) { ?>
          
                      <div class="col-sm-3">
            
                        <?php $fp_fourteen_image = get_theme_mod('featured_property_fourteen');
                          $feature14_id = attachment_url_to_postid($fp_fourteen_image);
                          $image_fourteen_alt  = get_post_meta( $feature14_id, '_wp_attachment_image_alt', true ); ?>
            
                        <a href="<?php echo esc_url(get_theme_mod('feat_prop_fourteen_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_fourteen')); ?>" alt="<?php echo $image_fourteen_alt; ?>" class="img-responsive featured-prop-img"></a>
                        <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_fourteen_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_fourteen_title'); ?></a></p>
                        <p class="prop-loc"><?php echo get_theme_mod('feat_prop_fourteen_loc'); ?></p>
                        <p class="prop-desc"><?php echo get_theme_mod('feat_prop_fourteen_desc'); ?></p>
          
                      </div>
        
                    <?php }
                    $fp_fifteen_image = get_theme_mod('featured_property_fifteen');
                    if ($fp_fifteen_image !== $default) { ?>
          
                      <div class="col-sm-3">
                        
                        <?php $fp_fifteen_image = get_theme_mod('featured_property_fifteen');
                              $feature14_id = attachment_url_to_postid($fp_fifteen_image);
                              $image_fifteen_alt  = get_post_meta( $feature14_id, '_wp_attachment_image_alt', true ); ?>
  
                        <a href="<?php echo esc_url(get_theme_mod('feat_prop_fifteen_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_fifteen')); ?>" alt="<?php echo $image_fifteen_alt; ?>" class="img-responsive featured-prop-img"></a>
                        <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_fifteen_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_fifteen_title'); ?></a></p>
                        <p class="prop-loc"><?php echo get_theme_mod('feat_prop_fifteen_loc'); ?></p>
                        <p class="prop-desc"><?php echo get_theme_mod('feat_prop_fifteen_desc'); ?></p>
                        
                      </div>
        
                    <?php }
                    $fp_sixteen_image = get_theme_mod('featured_property_sixteen');
                    if ($fp_sixteen_image !== $default) { ?>
          
                      <div class="col-sm-3">
  
                        <?php $fp_sixteen_image = get_theme_mod('featured_property_sixteen');
                              $feature16_id = attachment_url_to_postid($fp_sixteen_image);
                              $image_sixteen_alt  = get_post_meta( $feature16_id, '_wp_attachment_image_alt', true ); ?>
  
                        <a href="<?php echo esc_url(get_theme_mod('feat_prop_sixteen_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_sixteen')); ?>" alt="<?php echo $image_sixteen_alt; ?>" class="img-responsive featured-prop-img"></a>
                        <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_sixteen_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_sixteen_title'); ?></a></p>
                        <p class="prop-loc"><?php echo get_theme_mod('feat_prop_sixteen_loc'); ?></p>
                        <p class="prop-desc"><?php echo get_theme_mod('feat_prop_sixteen_desc'); ?></p>
                        
                      </div>
        
                    <?php } ?>
    
                </div>
                <!--/row-->
              </div>
              
            </div>
            <!--/carousel-inner-->
            <a class="fp-feat-carousel-nav left carousel-control" href="#fp-featured-carousel" data-slide="prev">‹</a>
            <a class="fp-feat-carousel-nav right carousel-control" href="#fp-featured-carousel" data-slide="next">›</a>
          </div>
          <!--/fp-featured-carousel-->
        </div>
        <!--/well-->
      </div>
    </div>
  
  <?php }
  
  
  add_action( 'wp_enqueue_scripts', 'add_front_page_listing_slider_scripts' );
  function add_front_page_listing_slider_scripts() {
    if(is_home() || is_front_page()) {
      // wp_enqueue_style('bootstrap4-5', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', all );
     // wp_enqueue_script('jQuery-351', 'https://code.jquery.com/jquery-3.5.1.min.js', array('jQuery'), '3.5.1', true);
     // wp_enqueue_script('popper-js-fp-slider', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '', true);
     // wp_enqueue_script('bootstrapcdn2', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(), '', true);
    }
  }
