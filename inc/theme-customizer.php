<?php

function lightworker_customize_register( $wp_customize ) {

  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'lightworker');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'lightworker');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'lightworker');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'lightworker');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'lightworker');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'lightworker');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'lightworker');  

  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'lightworker');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 

  // Remove some panels and sections

  $wp_customize->remove_control('header_image');
  $wp_customize->remove_section('colors');


// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'lightworker' ),
      'description' => __( 'Controls the basic settings for the theme.', 'lightworker' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'lightworker' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'lightworker' ),
  ) ); 
  $wp_customize->add_panel( 'carousel_settings', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Carousel Settings', 'lightworker' ),
      'description' => __( 'Controls the carousel slide images, text, and buttons.', 'lightworker' ),
  ) ); 
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'lightworker' ),
      'description' => __( 'Controls the color settings for the theme.', 'lightworker' ),
  ) ); 
  $wp_customize->add_panel( 'typography_settings', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Typography', 'lightworker' ),
      'description' => __( 'Controls the fonts for the theme.', 'lightworker' ),
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
    'title'      => __('Change Your Logo','lightworker'), 
    'panel'      => 'design_settings',
    'priority'   => 20    
  ) );  
  $wp_customize->add_setting(
      'lightworker_logo',
      array(
          'default'         => get_template_directory_uri() . '/images/lightworker-logo.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'lightworker' ),
               'section'    => 'custom_logo',
               'settings'   => 'lightworker_logo',
               'context'    => 'lightworker-custom-logo' 
           )
       )
   ); 

// CAROUSEL SETTINGS PANEL ........................................ //

  // Slide 1 Image

  $wp_customize->add_section( 'slide_1' , array(
    'title'      => __('Slide 1','lightworker'), 
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
               'label'      => __( 'Choose Photo', 'lightworker' ),
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
          'default'           => __( 'Slide 1 Headline', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_1_headline',
            array(
                'label'          => __( 'Headline', 'lightworker' ),
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
          'default'           => __( 'http://...', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_1_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker' ),
                'section'        => 'slide_1',
                'settings'       => 'slide_1_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 2 Image

  $wp_customize->add_section( 'slide_2' , array(
    'title'      => __('Slide 2','lightworker'), 
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
               'label'      => __( 'Choose Photo', 'lightworker' ),
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
          'default'           => __( 'Slide 2 Headline', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_2_headline',
            array(
                'label'          => __( 'Headline', 'lightworker' ),
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
          'default'           => __( 'http://...', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_2_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker' ),
                'section'        => 'slide_2',
                'settings'       => 'slide_2_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 3 Image

  $wp_customize->add_section( 'slide_3' , array(
    'title'      => __('Slide 3','lightworker'), 
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
               'label'      => __( 'Choose Photo', 'lightworker' ),
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
          'default'           => __( 'Slide 3 Headline', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_3_headline',
            array(
                'label'          => __( 'Headline', 'lightworker' ),
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
          'default'           => __( 'http://...', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_3_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker' ),
                'section'        => 'slide_3',
                'settings'       => 'slide_3_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 4 Image

  $wp_customize->add_section( 'slide_4' , array(
    'title'      => __('Slide 4','lightworker'), 
    'panel'      => 'carousel_settings',
    'priority'   => 40    
  ) );  
  
  $wp_customize->add_setting(
      'slide_4_img',
      array(
          'default'         => get_template_directory_uri() . '/images/blueberries.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slide_4',
           array(
               'label'      => __( 'Choose Photo', 'lightworker' ),
               'section'    => 'slide_4',
               'settings'   => 'slide_4_img',
               'context'    => 'slide-4-img' 
           )
       )
   ); 

  // Slide 4 Headline

  $wp_customize->add_setting(
      'slide_4_headline',
      array(
          'default'           => __( 'Slide 4 Headline', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_4_headline',
            array(
                'label'          => __( 'Headline', 'lightworker' ),
                'section'        => 'slide_4',
                'settings'       => 'slide_4_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 4 Link

  $wp_customize->add_setting(
      'slide_4_link',
      array(
          'default'           => __( 'http://...', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_4_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker' ),
                'section'        => 'slide_4',
                'settings'       => 'slide_4_link',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 5 Image

  $wp_customize->add_section( 'slide_5' , array(
    'title'      => __('Slide 5','lightworker'), 
    'panel'      => 'carousel_settings',
    'priority'   => 50    
  ) );  
  
  $wp_customize->add_setting(
      'slide_5_img',
      array(
          'default'         => get_template_directory_uri() . '/images/blueberries.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slide_5',
           array(
               'label'      => __( 'Choose Photo', 'lightworker' ),
               'section'    => 'slide_5',
               'settings'   => 'slide_5_img',
               'context'    => 'slide-5-img' 
           )
       )
   ); 

  // Slide 5 Headline

  $wp_customize->add_setting(
      'slide_5_headline',
      array(
          'default'           => __( 'Slide 5 Headline', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_5_headline',
            array(
                'label'          => __( 'Headline', 'lightworker' ),
                'section'        => 'slide_5',
                'settings'       => 'slide_5_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Slide 5 Link

  $wp_customize->add_setting(
      'slide_5_link',
      array(
          'default'           => __( 'http://...', 'lightworker' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'manly_slide_5_link',
            array(
                'label'          => __( 'Enter the URL for the page you want to link to', 'lightworker' ),
                'section'        => 'slide_5',
                'settings'       => 'slide_5_link',
                'type'           => 'text'
            )
        )
   );

// COLOR CHOICES PANEL ........................................ //

// Text Colors

  $wp_customize->add_section( 'text_colors' , array(
    'title'      => __('Text Colors','lightworker'), 
    'panel'      => 'color_choices',
    'priority'   => 100    
  ) );

  $wp_customize->add_setting(
      'lightworker_h1_color',
      array(
          'default'         => '#333333',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_h1_color',
           array(
               'label'      => __( 'Headings Color (DOES NOT affect the headings on the slideshow, even if it shows it in the preview.)', 'lightworker' ),
               'section'    => 'text_colors',
               'settings'   => 'lightworker_h1_color' 
           )
       )
   );

  $wp_customize->add_section( 'p_styles' , array(
    'title'      => __('Paragraph Text Styles','lightworker'), 
    'panel'      => 'color_choices',
    'priority'   => 130    
  ) );  
  $wp_customize->add_setting(
      'lightworker_p_color',
      array(
          'default'         => '#333333',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_p_color',
           array(
               'label'      => __( 'Paragraph Color', 'lightworker' ),
               'section'    => 'text_colors',
               'settings'   => 'lightworker_p_color' 
           )
       )
   );

// Accent Color

  $wp_customize->add_section( 'theme_colors' , array(
    'title'      => __('Accent Colors','lightworker'), 
    'panel'      => 'color_choices',
    'priority'   => 100    
  ) );

  $wp_customize->add_setting(
      'lightworker_accent_color',
      array(
          'default'         => '#d37470',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_accent_color',
           array(
               'label'      => __( 'Accent color for links and hover effects (WILL NOT affect the navigation bar links, even if it shows it in the preview.)', 'lightworker' ),
               'section'    => 'theme_colors',
               'settings'   => 'lightworker_accent_color' 
           )
       )
   ); 

// Box Background Color

  $wp_customize->add_setting(
      'lightworker_box_color',
      array(
          'default'         => '#f5f5f5',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_box_color',
           array(
               'label'      => __( 'Background color for the footer, sidebar widget titles, and page headers. (Best to keep this a very light shade that looks good with gray.)', 'lightworker' ),
               'section'    => 'theme_colors',
               'settings'   => 'lightworker_box_color' 
           )
       )
   ); 

// TYPOGRAPHY PANEL ........................................ //

// Headings Font

$wp_customize->add_section( 'custom_h_fonts' , array(
    'title'      => __('Headings Font','lightworker'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) ); 

$wp_customize->add_setting(
      'lightworker_h1_font_type',
      array(
          'default'         => 'Proza Libre',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h1_font_type',
            array(
                'label'          => __( 'Font', 'lightworker' ),
                'section'        => 'custom_h_fonts',
                'settings'       => 'lightworker_h1_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans'       => 'Open Sans',
                  'Proza Libre'       => 'Proza Libre',
                  'Roboto' => 'Roboto',
                  'PT Sans'    => 'PT Sans',
                  'Lato'         => 'Lato',
                  'Libre Franklin' => 'Libre Franklin',
                  'Lora'         => 'Lora',
                  'Raleway'      => 'Raleway',
                  'Titillium Web'   => 'Titillium Web',
                  'Josefin Sans'    => 'Josefin Sans',
                  'Alegreya Sans'        => 'Alegreya Sans',
                  'Taviraj'        => 'Taviraj',
                  'Source Sans Pro'        => 'Source Sans Pro',
                  'Exo'        => 'Exo',
                  'Josefin Slab'        => 'Josefin Slab',
                  'Cormorant'        => 'Cormorant'
                )
            )
        )       
   );

 // Paragraph Font

   $wp_customize->add_section( 'custom_p_fonts' , array(
    'title'      => __('Paragraph Font','lightworker'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) );  

   $wp_customize->add_setting(
      'lightworker_p_font_size',
      array(
          'default'         => '14px',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_size',
            array(
                'label'          => __( 'Font Size', 'lightworker' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'lightworker_p_font_size',
                'type'           => 'select',
                'choices'        => array(
                  '12'   => '12px',
                  '14'   => '14px',
                  '16'   => '16px',
                  '18'   => '18px',
                  '20'   => '20px',
                  '22'   => '22px'
                )
            )
        )       
   ); 

   $wp_customize->add_setting(
      'lightworker_p_font_type',
      array(
          'default'         => 'Proza Libre',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_type',
            array(
                'label'          => __( 'Font', 'lightworker' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'lightworker_p_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans'       => 'Open Sans',
                  'Proza Libre'       => 'Proza Libre',
                  'Roboto' => 'Roboto',
                  'PT Sans'    => 'PT Sans',
                  'Lato'         => 'Lato',
                  'Libre Franklin' => 'Libre Franklin',
                  'Lora'         => 'Lora',
                  'Raleway'      => 'Raleway',
                  'Titillium Web'   => 'Titillium Web',
                  'Josefin Sans'    => 'Josefin Sans',
                  'Alegreya Sans'        => 'Alegreya Sans',
                  'Taviraj'        => 'Taviraj',
                  'Source Sans Pro'        => 'Source Sans Pro',
                  'Exo'        => 'Exo',
                  'Josefin Slab'        => 'Josefin Slab',
                  'Cormorant'        => 'Cormorant'
                )
            )
        )       
   );

  // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','lightworker'), 
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
                'label'          => __( 'Add custom CSS here', 'lightworker' ),
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

h1,
h1 a,
h2,
h2 a,
h3,
h3 a,
h4,
h4 a,
h5,
h5 a,
h6,
h6 a {
	font-family: <?php echo get_theme_mod('lightworker_h1_font_type'); ?>;
}

h1 a:visited,
h2 a:visited,
h3 a:visited,
h4 a:visited,
h5 a:visited,
h6 a:visited {
  color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

p {
	font-size: <?php echo get_theme_mod('lightworker_p_font_size') . 'px'; ?>;
	color: <?php echo get_theme_mod('lightworker_p_color'); ?>;
	font-family: <?php echo get_theme_mod('lightworker_p_font_type'); ?>;
}

li {
  font-size: <?php echo get_theme_mod('lightworker_p_font_size') . 'px'; ?>;
  color: <?php echo get_theme_mod('lightworker_p_color'); ?>;
  font-family: <?php echo get_theme_mod('lightworker_p_font_type'); ?>;
}

a {
	font-family: <?php echo get_theme_mod('lightworker_p_font_type'); ?>;
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
  background-color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

a,
a:visited {
  color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

a:hover,
a:focus,
a:active {
  color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  background: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

.footer-cta button {
  background-color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

.footer-social .fa,
.footer-social a {
  color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

footer a:hover {
  color: <?php echo get_theme_mod('lightworker_accent_color'); ?>;
}

footer,
.page-header,
.post-header,
.archives-header,
.endofpost,
.sidebar h3,
.latest-posts,
.footer-cta {
  background-color: <?php echo get_theme_mod('lightworker_box_color'); ?>;
}

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