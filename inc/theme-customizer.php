<?php

function lightworker_customize_register( $wp_customize ) {

  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'lightworker-basic');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'lightworker-basic');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'lightworker-basic');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'lightworker-basic');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'lightworker-basic');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'lightworker-basic');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'lightworker-basic');  

  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'lightworker-basic');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 

  // Remove some panels and sections

  $wp_customize->remove_control('header_image');
  $wp_customize->remove_section('colors');


// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'lightworker-basic' ),
      'description' => __( 'Controls the basic settings for the theme.', 'lightworker-basic' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'lightworker-basic' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'lightworker-basic' ),
  ) ); 
  $wp_customize->add_panel( 'carousel_settings', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Carousel Settings', 'lightworker-basic' ),
      'description' => __( 'Controls the carousel slide images, text, and buttons.', 'lightworker-basic' ),
  ) ); 

  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;


// GENERAL SETTINGS PANEL ........................................ //

// DESIGN SETTINGS PANEL ........................................ //

  // Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','lightworker-basic'), 
    'panel'      => 'design_settings',
    'priority'   => 20    
  ) );  
  $wp_customize->add_setting(
      'lightworker_logo',
      array(
          'default'         => get_template_directory_uri() . '/images/lightworker-basic-logo.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'lightworker-basic' ),
               'section'    => 'custom_logo',
               'settings'   => 'lightworker_logo',
               'context'    => 'lightworker-basic-custom-logo' 
           )
       )
   ); 

// CAROUSEL SETTINGS PANEL ........................................ //

  // Slide 1 Image

  $wp_customize->add_section( 'slide_1' , array(
    'title'      => __('Slide 1','lightworker-basic'), 
    'panel'      => 'carousel_settings',
    'priority'   => 20    
  ) );  

  $wp_customize->add_setting(
      'slide_1_img',
      array(
          'default'         => get_template_directory_uri() . '/images/blueberries.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slide_1',
           array(
               'label'      => __( 'Choose Photo', 'lightworker-basic' ),
               'section'    => 'slide_1',
               'settings'   => 'slide_1_img',
               'context'    => 'slide-1-img' 
           )
       )
   ); 

  // Slide 1 Headline

  $wp_customize->add_setting(
      'slide_1_headline',
      array(
          'default'           => __( 'Slide 1 Headline', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_1_headline',
            array(
                'label'          => __( 'Headline', 'lightworker-basic' ),
                'section'        => 'slide_1',
                'settings'       => 'slide_1_headline',
                'type'           => 'text'
            )
        )
   ); 

   // Slide 1 Link

  $wp_customize->add_setting(
      'slide_1_link',
      array(
          'default'           => __( 'http://...', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_1_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker-basic' ),
                'section'        => 'slide_1',
                'settings'       => 'slide_1_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 2 Image

  $wp_customize->add_section( 'slide_2' , array(
    'title'      => __('Slide 2','lightworker-basic'), 
    'panel'      => 'carousel_settings',
    'priority'   => 20    
  ) );  
  
  $wp_customize->add_setting(
      'slide_2_img',
      array(
          'default'         => get_template_directory_uri() . '/images/blueberries.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slide_2',
           array(
               'label'      => __( 'Choose Photo', 'lightworker-basic' ),
               'section'    => 'slide_2',
               'settings'   => 'slide_2_img',
               'context'    => 'slide-2-img' 
           )
       )
   ); 

  // Slide 2 Headline

  $wp_customize->add_setting(
      'slide_2_headline',
      array(
          'default'           => __( 'Slide 2 Headline', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_2_headline',
            array(
                'label'          => __( 'Headline', 'lightworker-basic' ),
                'section'        => 'slide_2',
                'settings'       => 'slide_2_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 2 Link

  $wp_customize->add_setting(
      'slide_2_link',
      array(
          'default'           => __( 'http://...', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_2_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker-basic' ),
                'section'        => 'slide_2',
                'settings'       => 'slide_2_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 3 Image

  $wp_customize->add_section( 'slide_3' , array(
    'title'      => __('Slide 3','lightworker-basic'), 
    'panel'      => 'carousel_settings',
    'priority'   => 30    
  ) );  
  
  $wp_customize->add_setting(
      'slide_3_img',
      array(
          'default'         => get_template_directory_uri() . '/images/blueberries.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slide_3',
           array(
               'label'      => __( 'Choose Photo', 'lightworker-basic' ),
               'section'    => 'slide_3',
               'settings'   => 'slide_3_img',
               'context'    => 'slide-3-img' 
           )
       )
   ); 

  // Slide 3 Headline

  $wp_customize->add_setting(
      'slide_3_headline',
      array(
          'default'           => __( 'Slide 3 Headline', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_3_headline',
            array(
                'label'          => __( 'Headline', 'lightworker-basic' ),
                'section'        => 'slide_3',
                'settings'       => 'slide_3_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 3 Link

  $wp_customize->add_setting(
      'slide_3_link',
      array(
          'default'           => __( 'http://...', 'lightworker-basic' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_3_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker-basic' ),
                'section'        => 'slide_3',
                'settings'       => 'slide_3_link',
                'type'           => 'text'
            )
        )
   ); 

   // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','lightworker-basic'), 
    'panel'      => 'design_settings',
    'priority'   => 2000    
  ) );  
  $wp_customize->add_setting(
      'lightworker_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'lightworker-basic' ),
                'section'        => 'custom_css_field',
                'settings'       => 'lightworker_custom_css',
                'type'           => 'textarea'
            )
        )
   );
}
  
add_action( 'customize_register', 'lightworker_customize_register' );

// Call the custom css into the header

$defaults = array(
  'wp-head-callback'       => 'lightworker_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Callback function for updating styles

function lightworker_style_header() {

   ?>

<style type="text/css">

  <?php if( get_theme_mod('lightworker_custom_css') != '' ) {
    echo get_theme_mod('lightworker_custom_css');
  } ?>

  </style>

<?php 

}

// Add theme support for Custom Backgrounds

$defaults = array(
  'default-color' => '#ffffff',
);
add_theme_support( 'custom-background', $defaults );

// Sanitize text 

function sanitize_text( $text ) {    
    return sanitize_text_field( $text );
}

// Sanitize textarea 

function sanitize_textarea( $text ) {    
    return esc_textarea( $text );
}

// Custom js for theme customizer

function lightworker_customizer_js() {
  wp_enqueue_script(
    'lightworker_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'lightworker_customizer_js' );

?>