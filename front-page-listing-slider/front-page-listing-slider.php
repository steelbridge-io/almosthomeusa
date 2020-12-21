<?php
  
  
  
  add_action('front-page-carousel', 'add_front_page_listing_slider');
  function add_front_page_listing_slider() { ?>
    <div id="front-page-listing-carousel" class="container">
      <div class="col-md-12">
        <div class="well">
          <div id="fp-featured-carousel" class="carousel slide">
          
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-3">
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_one_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_one')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_one_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_one_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_one_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_one_desc'); ?></p>
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_two_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_two')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_two_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_two_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_two_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_two_desc'); ?></p>
                    
                    
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_three_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_three')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_three_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_three_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_three_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_three_desc'); ?></p>
                    
                    
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_four_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_four')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_four_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_four_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_four_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_four_desc'); ?></p>
                    
                  </div>
                </div>
                <!--/row-->
              </div>
              <!--/item-->
              <div class="item">
                <div class="row">
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_five_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_five')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_five_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_five_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_five_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_five_desc'); ?></p>
                    
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_six_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_six')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_six_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_six_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_six_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_six_desc'); ?></p>
                    
                    
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_seven_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_seven')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_seven_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_seven_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_seven_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_seven_desc'); ?></p>
                    
                  </div>
                  <div class="col-sm-3">
  
                    <a href="<?php echo esc_url(get_theme_mod('feat_prop_eight_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('featured_property_eight')); ?>" alt="Image" class="img-responsive featured-prop-img"></a>
                    <p class="feat-prop-title"><a href="<?php echo esc_url(get_theme_mod('feat_prop_eight_url')); ?>" title=""><?php echo get_theme_mod('feat_prop_eight_title'); ?></a></p>
                    <p class="prop-loc"><?php echo get_theme_mod('feat_prop_eight_loc'); ?></p>
                    <p class="prop-desc"><?php echo get_theme_mod('feat_prop_eight_desc'); ?></p>
                    
                  </div>
                </div>
                <!--/row-->
              </div>
              <!--/item-->
             <!-- <div class="item">
                <div class="row">
                  <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                  </div>
                  <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                  </div>
                  <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                  </div>
                  <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                  </div>
                </div> -->
                <!--/row-->
             <!-- </div> -->
              <!--/item-->
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
