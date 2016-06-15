<?php
/**
 * knr Theme Customizer.
 *
 * @package knr
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function knr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

}
add_action( 'customize_register', 'knr_customize_register' );




function knr_customizer_register( $wp_customize ) 
    {
      // Do stuff with $wp_customize, the WP_Customize_Manager object.

      $wp_customize->add_panel( 'theme_option', array(
        'priority' => 150,
        'title' => __( 'KnR Theme Option', 'knr' ),
        'description' => __( 'Welcome to KnR Theme Option.', 'knr' ),
      ));

      /**********************************************/
      /*************** LOGO SECTION *****************/
      /**********************************************/     

  /*   $wp_customize->add_section('theme_logo',array(
        'priority' => 30,
        'title' => __('Theme Logo','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Upload image of 200px width and 52px height for logo','knr'),
        'panel' => 'theme_option',
      ));

     $wp_customize->add_setting('logo_image',array(
      'sanitize_callback' => 'esc_url_raw',
      'capability' => 'edit_theme_options'
      ));

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_image',array(
        'label' => __('Edit Theme Logo','knr'),
        'section' => 'theme_logo',
        'settings' => 'logo_image'
        )  
      ));  */

      /**********************************************/
      /************* MAIN SLIDER SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('slider_category',array(
        'title' => __('Slider Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Slide Category for Homepage.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting('slider_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'slider_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'slider_category',
        'settings' => 'slider_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));

      $wp_customize->add_setting('slider_category_display_num',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>'2',
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'slider_category_display_num',array(
        'label'=>__('Select Number of Post','knr'),
        'section'=>'slider_category',
        'settings'=>'slider_category_display_num',
        'type'=>'select',
        'choices'=>array(1,2,3,4,5,6,7,8,9),
        )
      ));


      $wp_customize->add_setting(
        'slider_button',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'capability' => 'edit_theme_options',
              'default' => '',
          )
      );

      $wp_customize->add_control(
        'slider_button',
         array(
          'label' => __('Contact Us Link','knr'),
          'section' => 'slider_category',
          'settings' => 'slider_button',
          'type' => 'text',
         )
      );


      /**********************************************/
      /************* FEATURES SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('features_category',array(
        'title' => __('Features Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Features Content Category.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting('features_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'features_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'features_category',
        'settings' => 'features_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));
       $wp_customize->add_setting('featured_category_status',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>0,
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'featured_category_status',array(
        'label'=>__('Enable/Disable Featured Content','knr'),
        'section'=>'features_category',
        'settings'=>'featured_category_status',
        'type'=>'select',
        'choices'=>array('Enable', 'Disable'),
        )
      ));


      /**********************************************/
      /************* SERVICES SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('services_category',array(
        'title' => __('Services Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Services Category for Homepage.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting(
        'services_title',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',  
            'default' => 'Our Services',
          )
      );

      $wp_customize->add_control(
        'services_title',
          array(
          'label' => __('Our Services Title','knr'),
          'section' => 'services_category',
          'settings' => 'services_title',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting('services_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'services_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'services_category',
        'settings' => 'services_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));
        $wp_customize->add_setting('services_category_status',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>0,
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'services_category_status',array(
        'label'=>__('Enable/Disable Services Section','knr'),
        'section'=>'services_category',
        'settings'=>'services_category_status',
        'type'=>'select',
        'choices'=>array('Enable', 'Disable'),
        )
      ));


      /**********************************************/
      /************* TESTIMONIALS SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('testimonial_category',array(
        'title' => __('Testimonials Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Testimonials Category for Homepage.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting(
        'testimonial_title',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',
            'default' => 'Testimonials',
          )
      );

      $wp_customize->add_control(
        'testimonial_title',
          array(
          'label' => __('Testimonials Title','knr'),
          'section' => 'testimonial_category',
          'settings' => 'testimonial_title',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting('testimonial_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'testimonial_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'testimonial_category',
        'settings' => 'testimonial_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));

      $wp_customize->add_setting('testimonial_category_background',array(
        'sanitize_callback' => 'esc_url_raw',
        'capability' => 'edit_theme_options'
        ));

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'testimonial_category_background', array(
        'label' => __('Edit Testimonial Background','knr'),
        'section' => 'testimonial_category',
        'settings' => 'testimonial_category_background'
        )
        ));
        $wp_customize->add_setting('testimonial_category_status',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>0,
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'testimonial_category_status',array(
        'label'=>__('Enable/Disable Testimonials Section','knr'),
        'section'=>'testimonial_category',
        'settings'=>'testimonial_category_status',
        'type'=>'select',
        'choices'=>array('Enable', 'Disable'),
        )
      ));

      /**********************************************/
      /************* LATEST POST SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('latestpost_category',array(
        'title' => __('Latest Post Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Latest Post Category for Homepage.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting(
        'latestpost_title',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',
            'default' => 'Latest Post',
          )
      );

      $wp_customize->add_control(
        'latestpost_title',
          array(
          'label' => __('Latest Post Title','knr'),
          'section' => 'latestpost_category',
          'settings' => 'latestpost_title',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting('latestpost_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'latestpost_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'latestpost_category',
        'settings' => 'latestpost_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));

          $wp_customize->add_setting('latestpost_category_status',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>0,
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'latestpost_category_status',array(
        'label'=>__('Enable/Disable Latest Post Section','knr'),
        'section'=>'latestpost_category',
        'settings'=>'latestpost_category_status',
        'type'=>'select',
        'choices'=>array('Enable', 'Disable'),
        )
      ));


      /**********************************************/
      /************* OUR WORKS SECTION *************/
      /**********************************************/     

      $wp_customize->add_section('ourworks_category',array(
        'title' => __('Our Works Categories','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Select the Our Works Category for Homepage.','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting(
        'ourworks_title',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',
            'default' => 'Our Works',
          )
      );

      $wp_customize->add_control(
        'ourworks_title',
          array(
          'label' => __('Our Works Title','knr'),
          'section' => 'ourworks_category',
          'settings' => 'ourworks_title',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting('ourworks_category_display',array(
        'sanitize_callback' => 'knr_sanitize_category',
        'capability' => 'edit_theme_options',
        'default' => ''
      ));

      $wp_customize->add_control(new knr_Customize_Dropdown_Taxonomies_Control($wp_customize,'ourworks_category_display',array(
        'label' => __('Choose category','knr'),
        'section' => 'ourworks_category',
        'settings' => 'ourworks_category_display',
        'type'=> 'dropdown-taxonomies',
        )  
      ));
      $wp_customize->add_setting('ourworks_category_status',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'knr_sanitize_text',
        'default'=>0,
        ));
      $wp_customize->add_control(new knr_Select_Customize_Control($wp_customize,'ourworks_category_status',array(
        'label'=>__('Enable/Disable Our Works Section','knr'),
        'section'=>'ourworks_category',
        'settings'=>'ourworks_category_status',
        'type'=>'select',
        'choices'=>array('Enable', 'Disable'),
        )
      ));

       /**********************************************/
      /*************** NEWSLETTER SECTION ***************/
      /**********************************************/

      $wp_customize->add_section('newsletter_text',array(
        'title' => __('Newsletter Section','knr'),
        'capability' => 'edit_theme_options',
        'description' => __('Write Some Words for Newsletter Section in Homepage.install Newsletter plugin to use this section','knr'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting(
        'newsletter_textbox',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',
            'default' => 'Subscribe for newsletter',
          )
      );

      $wp_customize->add_control(
        'newsletter_textbox',
          array(
          'label' => __('Newsletter Textbox','knr'),
          'section' => 'newsletter_text',
          'settings' => 'newsletter_textbox',
          'type' => 'text',
         )
      ); 

      /**********************************************/
      /*************** FOOTER SECTION ***************/
      /**********************************************/

       $wp_customize->add_section(
        'footer_section',
          array(
            'title' => __('Footer Settings','knr'),
            'capability' => 'edit_theme_options',
            'description' => __('Customize your Footer section.','knr'),
            'panel' => 'theme_option'
        )
      );


      /**********************************************/
      /*************** COPYRIGHTS SECTION **************/
      /**********************************************/
       
      $wp_customize->add_setting(
        'copyright_textbox',
          array(
            'sanitize_callback' => 'knr_sanitize_text',
            'capability' => 'edit_theme_options',
            'default' => '&copy; 2016. KNR-WP-THEME. All Rights Reserved.',
          )
      );

      $wp_customize->add_control(
        'copyright_textbox',
          array(
          'label' => __('Copyright text','knr'),
          'section' => 'footer_section',
          'settings' => 'copyright_textbox',
          'type' => 'text',
         )
      );


      /**********************************************/
      /******* SOCIAL ICON HIDE/ DISPLAY SECTION ********/
      /**********************************************/

      $wp_customize->add_setting('socialicon_display',array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
        'default' => '1'
      ));

      $wp_customize->add_control(new WP_Customize_Control($wp_customize,'socialicon_display',array(
        'label' => __('Show social icons','knr'),
        'section' => 'footer_section',
        'settings' => 'socialicon_display',
        'type'=> 'checkbox',
        ))
      );


      /**********************************************/
      /********** SOCIAL ICON LINKS SECTION ***********/
      /**********************************************/

      $wp_customize->add_setting(
        'facebook_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'facebook_textbox',
          array(
            'label' =>__('Facebook','knr'),
            'section' => 'footer_section',
            'settings' => 'facebook_textbox',
            'type' => 'text',
          )
      );

      $wp_customize->add_setting(
        'twitter_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'twitter_textbox',
         array(
          'label' => __('Twitter','knr'),
          'section' => 'footer_section',
          'settings' => 'twitter_textbox',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'googleplus_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'googleplus_textbox',
          array(
          'label' => __('Googleplus','knr'),
          'section' => 'footer_section',
          'settings' => 'googleplus_textbox',
          'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'youtube_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
          'default' => '',
          )
      );
      
      $wp_customize->add_control(
        'youtube_textbox',
          array(
            'label' => __('YouTube','knr'),
            'section' => 'footer_section',
            'settings' => 'youtube_textbox',
            'type' => 'text',
         )
      );

      $wp_customize->add_setting(
        'linkedin_textbox',
            array(
              'sanitize_callback' => 'esc_url_raw',
              'capability' => 'edit_theme_options',
              'default' => '',
          )
      );

      $wp_customize->add_control(
        'linkedin_textbox',
         array(
          'label' => __('Linkedin','knr'),
          'section' => 'footer_section',
          'settings' => 'linkedin_textbox',
          'type' => 'text',
         )
      );

    $wp_customize->add_setting(
        'github_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'github_textbox',
          array(
            'label' =>__('GitHub','knr'),
            'section' => 'footer_section',
            'settings' => 'github_textbox',
            'type' => 'text',
          )
      );
      
    $wp_customize->add_setting(
        'instagram_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            'capability' => 'edit_theme_options',
            'default' => '',
          )
      );

      $wp_customize->add_control(
        'instagram_textbox',
          array(
            'label' =>__('Instagram','knr'),
            'section' => 'footer_section',
            'settings' => 'instagram_textbox',
            'type' => 'text',
          )
      );
      
      /**********************************************/
      /***** ADJUSTMENT OF SIDEBAR POSITION SECTION *****/
      /**********************************************/
     
      $wp_customize->add_panel( 'layout', array(
        'priority' => 160,
        'title' => __( 'knr Sidebar Layout', 'knr' ),
        'description' => __( 'Theme Sidebar Layout', 'knr' ),
      ));

      $wp_customize->add_section('sidebar' , array(
        'title' => __('Category Sidebar','knr'),
        'capability' => 'edit_theme_options',
        'panel' => 'layout'
      ));

      $wp_customize->add_setting('sidebar_position', array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
          'default' => 'right'
        ));

      $wp_customize->add_control('sidebar_position', array(
        'label'      => __('Sidebar position', 'knr'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'both'   => 'both',
          'left'   => 'left',
          'right'  => 'right',
        ),
      ));


      /**********************************************/
      /********** SINGLE POST SIDEBAR SECTION ***********/
      /**********************************************/
     

      $wp_customize->add_section('single_post_sidebar' , array(
        'title' => __('Single Post Sidebar','knr'),
        'capability' => 'edit_theme_options',
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('single_post_sidebar_position', array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
          'default' => 'right'
      ));

      $wp_customize->add_control('single_post_sidebar_position', array(
        'label'      => __('Single Post Sidebar position', 'knr'),
        'section'    => 'single_post_sidebar',
        'settings'   => 'single_post_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'both'   => 'both',
          'left'   => 'left',
          'right'  => 'right',
        ),
      ));


      /**********************************************/
      /********** SINGLE PAGE SIDEBAR SECTION ***********/
      /**********************************************/
     

      $wp_customize->add_section('single_page_sidebar' , array(
        'title' => __('Single Page Sidebar','knr'),
        'capability' => 'edit_theme_options',
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('single_page_sidebar_position', array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
          'default' => 'right'
      ));

      $wp_customize->add_control('single_page_sidebar_position', array(
        'label'      => __('Single Page Sidebar position', 'knr'),
        'section'    => 'single_page_sidebar',
        'settings'   => 'single_page_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'both'   => 'both',
          'left'   => 'left',
          'right'  => 'right',
        ),
      ));


      /**********************************************/
      /******** SEARCH PAGE SIDEBAR SECTION *********/
      /**********************************************/     

      $wp_customize->add_section('search_page_sidebar' , array(
        'title' => __('Search Page Sidebar','knr'),
        'capability' => 'edit_theme_options',
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('search_page_sidebar_position', array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
          'default' => 'right'
      ));

      $wp_customize->add_control('search_page_sidebar_position', array(
        'label'      => __('Search Page Sidebar position', 'knr'),
        'section'    => 'search_page_sidebar',
        'settings'   => 'search_page_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'both'   => 'both',
          'left'   => 'left',
          'right'  => 'right',
        ),
      ));

      /**********************************************/
      /******** About knr *********/
      /**********************************************/    
  $wp_customize->add_section('knr_about_section', array(    
    'title'       => __('About knr Theme', 'knr'),
    'priority' => 400,    
  ));

  $wp_customize->add_setting( 'knr_about_section', array(
   'default'               => '',
   'type'                  => 'theme_mod',
   'capability'            => 'edit_theme_options',
   'theme_supports'        => '',
   'transport'             => 'refresh',
   'sanitize_callback' => 'knr_sanitize_html'      
  ) );

  $wp_customize->add_control(new about_knr_theme($wp_customize, 'knr_about_section', 
      array(
        'label' => __('Important Links', 'knr'),        
        'settings' => 'knr_about_section',
        'section' => 'knr_about_section'
      )
    )
  );

      /**********************************************/
      /******** PAGE NOT FOUND SIDEBAR SECTION *********/
      /**********************************************/     

      $wp_customize->add_section('page_not_found_sidebar' , array(
        'title' => __('Page Not Found Sidebar','knr'),
        'capability' => 'edit_theme_options',
        'panel' => 'layout'
      ));


      $wp_customize->add_setting('page_not_found_sidebar_position', array(
        'sanitize_callback' => 'knr_sanitize_text',
        'capability' => 'edit_theme_options',
          'default' => 'right'
      ));

      $wp_customize->add_control('page_not_found_sidebar_position', array(
        'label'      => __('Page Not Found Sidebar position', 'knr'),
        'section'    => 'page_not_found_sidebar',
        'settings'   => 'page_not_found_sidebar_position',
        'type'       => 'radio',
        'choices'    => array(
          'both'   => 'both',
          'left'   => 'left',
          'right'  => 'right',
        ),
      ));      

      
    }

add_action( 'customize_register', 'knr_customizer_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function knr_customize_preview_js() {
	wp_enqueue_script( 'knr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'knr_customize_preview_js' );

function knr_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function knr_sanitize_textarea( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function knr_sanitize_category($input){
  $output=intval($input);
  return $output;

}