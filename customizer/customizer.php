<?php
  /*
   * Customizer
   * */
  
  function almosthome_customize_register( $wp_customize ) {
    // Front Page Properties Carousel
    $wp_customize->add_section( 'almosthome_carousel' , array(
      'title' => __( 'Front Page Featured Properties')
    ) );
  
  
    $wp_customize->add_setting('featured_property_one', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_one_control', array(
      'label' => __('Feature Property #1', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_one',
    )));
  
    $wp_customize->add_setting( 'feat_prop_one_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_one_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_one_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_one_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_one_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_one_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_one_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_one_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_one_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_one_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_one_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_one_desc'
    ) );
    
    
    $wp_customize->add_setting('featured_property_two', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_two_control', array(
      'label' => __('Feature Property #2', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_two',
    )));
  
    $wp_customize->add_setting( 'feat_prop_two_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_two_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_two_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_two_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_two_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_two_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_two_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_two_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_two_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_two_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_two_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_two_desc'
    ) );
    
    
    $wp_customize->add_setting('featured_property_three', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_three_control', array(
      'label' => __('Feature Property #3', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_three',
    )));
  
    $wp_customize->add_setting( 'feat_prop_three_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_three_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_three_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_three_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_three_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_three_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_three_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_three_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_three_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_three_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_three_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_three_desc'
    ) );
    
    
    $wp_customize->add_setting('featured_property_four', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_four_control', array(
      'label' => __('Feature Property #4', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_four',
    )));
  
    $wp_customize->add_setting( 'feat_prop_four_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_four_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_four_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_four_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_four_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_four_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_four_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_four_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_four_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_four_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_four_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_four_desc'
    ) );
    
    
    $wp_customize->add_setting('featured_property_five', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_five_control', array(
      'label' => __('Feature Property #5', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_five',
    )));
  
    $wp_customize->add_setting( 'feat_prop_five_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_five_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_five_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_five_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_five_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_five_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_five_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_five_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_five_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_five_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_five_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_five_desc'
    ) );
  
    
    $wp_customize->add_setting('featured_property_six', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_six_control', array(
      'label' => __('Feature Property #6', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_six',
    )));
  
    $wp_customize->add_setting( 'feat_prop_six_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_six_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_six_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_six_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_six_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_six_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_six_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_six_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_six_loc'
    ) );
  
    
    $wp_customize->add_setting( 'feat_prop_six_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_six_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_six_desc'
    ) );
    
  
    $wp_customize->add_setting('featured_property_seven', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_seven_control', array(
      'label' => __('Feature Property #7', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_seven',
    )));
  
    $wp_customize->add_setting( 'feat_prop_seven_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_seven_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_seven_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_seven_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_seven_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_seven_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_seven_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_seven_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_seven_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_seven_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_seven_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_seven_desc'
    ) );
    
  
    $wp_customize->add_setting('featured_property_eight', array(
      'default-image' => get_stylesheet_directory_uri() . '/wp-content/uploads/2013/06/logohires.jpg',
      'transport'     => 'refresh',
      'height'        => 250,
      'width'        => 250,
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_property_eight_control', array(
      'label' => __('Feature Property #8', 'themeRemax'),
      'section' => 'almosthome_carousel',
      'settings' => 'featured_property_eight',
    )));
  
    $wp_customize->add_setting( 'feat_prop_eight_url', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      'sanitize_callback' => 'esc_url',
    ) );
  
    $wp_customize->add_control( 'feat_prop_eight_url', array(
      'type' => 'url',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'URL', 'textdomain' ),
      'description' => 'Add thee link to the product here:',
      'settings'  => 'feat_prop_eight_url'
    ) );
  
  
    $wp_customize->add_setting( 'feat_prop_eight_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_eight_title', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Title', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_eight_title'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_eight_loc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_eight_loc', array(
      'type' => 'tex',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Location', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_eight_loc'
    ) );
  
  
  
    $wp_customize->add_setting( 'feat_prop_eight_desc', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage',
      array(
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
      )
    ) );
  
    $wp_customize->add_control( 'feat_prop_eight_desc', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'almosthome_carousel',
      'label' => __( 'Property Description', 'textdomain' ),
      'description' => '',
      'settings'  => 'feat_prop_eight_desc'
    ) );
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }
  add_action( 'customize_register', 'almosthome_customize_register' );
