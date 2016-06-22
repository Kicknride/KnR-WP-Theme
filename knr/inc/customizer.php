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

      
        // Remove the core header textcolor control, as it shares the sidebar text color.
        $wp_customize->remove_control( 'header_textcolor' );

	// Add global theme color setting and control.
	$wp_customize->add_setting( 'knr_global_color', array(
		'default'           => '#cc3300',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'knr_global_color', array(
		'label'       => __( 'Global Theme Color', 'knr' ),
		'description' => __( 'Applied to the global theme.', 'knr' ),
		'section'     => 'colors',
	) ) );


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
            'default' => "&copy; 2016. Kick'n Ride. All Rights Reserved.",
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
        'title' => __( 'KnR Sidebar Layout', 'knr' ),
        'description' => __( 'Theme Sidebar Layout', 'knr' ),
      ));

      $wp_customize->add_section('sidebar' , array(
        'title' => __('Blog Sidebar','knr'),
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
    'title'       => __('About KnR Theme', 'knr'),
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

function knr_customize_css()
{
    ?>
         <style type="text/css">

a, a:link, a:focus, a:link, a:visited, a:active {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

code {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.btn-theme {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.theme-color {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.theme-bg {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.form-control:focus {
	border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}


/*----------Section Title----------*/
.section-title .underline {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
	}


/*----------Animation on dropdown-----------*/
mark {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

/*--------------------------------------------------------------
# Elements
--------------------------------------------------------------*/
.elements .single .underline {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/
/*----------------Smart Menu-------------*/
/*
 You probably do not need to edit this at all.

 Add some SmartMenus required styles not covered in Bootstrap 3's default CSS.
 These are theme independent and should work with any Bootstrap 3 theme mod.
*/

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
	background-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> ;
}

/*----------Logo-----Menu-----*/
 .logo a, .logo a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.logo-menu .main-menu .navbar-nav > li > a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a, 
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a:hover, 
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a:focus {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.logo-menu .main-menu .dropdown-menu {
	border-top: 4px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.logo-menu .main-menu .dropdown-menu:before {
	border-bottom: 10px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.logo-menu .main-menu .dropdown-menu > li > a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
/*--------Sticky------*/
.logo-menu.sticky-menu {
	border-bottom: 4px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

/*--------------------------------------------------------------
## Links
--------------------------------------------------------------*/

.page-numbers .current{
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> none repeat scroll 0 0;
	border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
li a, li a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:hover, 
.dropdown-menu > .active > a:focus {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> !important;
}



/*--------------------------------------------------------------
## Asides
--------------------------------------------------------------*/
aside.sidebar .single .title:after {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> none repeat scroll 0% 0%;
}
aside.sidebar .single .search .btn {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
	border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
aside.sidebar .single .underline {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
aside.sidebar .single ul li a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
aside.sidebar .single .tagcloud a:hover {
	color:<?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/

.single-page .comment .name {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.single-page .comment .reply-btn {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.fn, .fn a, .says, time {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.comment-reply-link {    
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.comment-reply-link:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

/*-------------Scroll to top--------------*/
.scroll-top-wrapper {
	background-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


/*--Selection-------*/
::-moz-selection {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

::selection {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}




/*--------------------------------------------------------------
## FOOTER
--------------------------------------------------------------*/
footer .single .single-title {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
footer .single li a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
footer .single address i {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
footer .copyright .social-media li a {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
footer .copyright .social-media li a:hover {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


/*--------------------------------------------------------------
## FULL WIDTH SLIDER
--------------------------------------------------------------*/
.carousel-caption .buttons .btn {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.carousel-caption .buttons .btn-slider1 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}


/*--------------------------------------------------------------
## SLIDER
--------------------------------------------------------------*/
.carousel-indicators .active {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}



/*--------------------------------------------------------------
## INTRO
--------------------------------------------------------------*/
.intro {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.intro .single .read-more {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}



/*--------------------------------------------------------------
## SERVICES
--------------------------------------------------------------*/
.services .single .content .read-more {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.services .single .content .read-more:hover {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}



/*--------------------------------------------------------------
## TESTIMONIAL
--------------------------------------------------------------*/
.testimonials .section-title h3 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.testimonials .client-info h3 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.testimonials .client-info p {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.testimonials .owl-theme .owl-controls .owl-page.active span {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}



/*--------------------------------------------------------------
## LATEST POST
--------------------------------------------------------------*/
.latest-post .single .content .read-more {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
	border: 1px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.latest-post .single .content .read-more:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}



/*--------------------------------------------------------------
## OUR WORKS
--------------------------------------------------------------*/
.our-works .single .underline {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.our-works .single .read-more {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}



/*--------------------------------------------------------------
## NEWSLETTER
--------------------------------------------------------------*/
.newsletter {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


/*--------------------------------------------------------------
## THEME INNERPAGE CSS
--------------------------------------------------------------*/
.page-header .block .underline {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.page-header .block .bc li a {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.page-header .block .bc li a:hover {
	border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}




/*--------------------------------------------------------------
## BLOG PAGE
--------------------------------------------------------------*/
.post-title a, .post-title a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.taxonomy-description > p {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.inner-content .single-post .read-more {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.inner-content .single-post .read-more:hover {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> none repeat scroll 0 0;
}



/*--------------------------------------------------------------
## CONTACT PAGE
--------------------------------------------------------------*/
.wpcf7-submit {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}



/*--------------------------------------------------------------
## PAGE NOT FOUND
--------------------------------------------------------------*/
.not-found h1 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}



/*--------------------------------------------------------------
## SINGLE POST
--------------------------------------------------------------*/
.single-page .post-info a:hover {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.single-page blockquote {
	border-top: 4px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.single-page blockquote cite {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.single-page .social-media li a {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.single-page .pager li > a, .single-page .pager li > span {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

.pagination ul li a {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.pagination ul li.active a {
	background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
	border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.content h1 {
	border-top: 3px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


.content blockquote.sommaire {
    font-style: normal;
    padding-left: 50px;
    border: none;
    background: rgba(204, 51, 0, 0.025);
    padding-bottom: 0.001em;
    border-radius: 4px 4px 4px 4px; 

}



/*--------------------------------------------------------------
## WOO COMMERCE EXTRA CSS
--------------------------------------------------------------*/
.woocommerce .woocommerce-breadcrumb a{ 
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.woocommerce ul.products li.product h3 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce .star-rating::before,
.woocommerce .products .star-rating,
.woocommerce ul.products li.product .price{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.woocommerce #respond input#submit, 
.woocommerce a.button, .woocommerce button.button, 
.woocommerce input.button {
	background-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}


/*Woo-commerce Single Page*/
.woocommerce div.product .product_title {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.woocommerce .star-rating span {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce-review-link {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce div.product p.price ins, 
.woocommerce div.product span.price ins {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce div.product p.price, 
.woocommerce div.product span.price {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.product_meta .posted_in a {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

#tab-description h2{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.woocommerce #reviews h3{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt{
	background-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover{
	background-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?> !important;
}


.woocommerce #reviews #comments h2 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce p.stars a.star-1::after, 
.woocommerce p.stars a.star-2::after, 
.woocommerce p.stars a.star-3::after, 
.woocommerce p.stars a.star-4::after, 
.woocommerce p.stars a.star-5::after{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.related.products > h2 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.product-name > a{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.product-name > a:hover{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
.cross-sells > h2 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

/*Woo-Commerce Cart Page*/
.woocommerce .woocommerce-info {
	border-top-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce .woocommerce-info::before{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.showlogin, .showlogin:hover{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.showcoupon, .showcoupon:hover{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.lost_password a, .lost_password a:hover{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

.woocommerce-billing-fields h3{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

.woocommerce-shipping-fields h3{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}
#order_review_heading{
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
}

.order_details {
	border: 1px solid <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.woocommerce > h2 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
header > h2 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}
.title > h3 {
	color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
}

@media (max-width: 767px) {
	.navbar-default .navbar-toggle {
		border-color: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>;
	}
	.navbar-default .navbar-toggle .icon-bar {
		background: <?php echo get_theme_mod('knr_global_color', '#cc3300'); ?>; 
	}
}


         </style>
    <?php
}
add_action( 'wp_head', 'knr_customize_css');
