<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package KnR
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function knr_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'knr_body_classes' );




add_filter( 'comment_form_default_fields', 'knr_comment_form_fields' );
function knr_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="col-sm-12 form-group comment-form-author">' . 
                    '<input class="form-control" id="author" name="author" type="text" placeholder="* Full Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="col-sm-12 form-group comment-form-email">'.
                    '<input class="form-control" id="email" placeholder="* Email Address" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class=" col-sm-12 form-group comment-form-url">' .
                    '<input class="form-control" id="url" placeholder="Website" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );
    
    return $fields;
}



add_filter( 'comment_form_defaults', 'knr_comment_form' );
function knr_comment_form( $args ) {
    $args['comment_field'] = '<div class="col-sm-12 form-group comment-form-comment">'.'<textarea class="form-control" id="comment" placeholder="Write your comment.." name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-theme'; // since WP 4.1
    
    return $args;
}



add_action('comment_form', 'knr_comment_button' );
function knr_comment_button() {
    echo '<div class="submit-button">';
        echo '<button class="btn btn-theme" type="submit">' . __( 'Submit', 'knr' ) . '</button>';
    echo '</div>';
}


if (class_exists('WP_Customize_Control') && ! class_exists( 'about_knr_theme' ) ) {

 class about_knr_theme extends WP_Customize_Control {

      public $type = "about_knr_theme";

      public function render_content() {
         
         $about_knr_theme = array(
                        'developed' => array(
                            'label' => __('Developed By: ', 'knr'),                         
                            'text' => __('Oceanweb Themes', 'knr'),
                            'link' => esc_url('http://oceanwebthemes.com/'),
                        ),

                        'demo' => array(
                            'label' => __('KnRPlus Preview: ', 'knr'),                           
                            'text' => __('View Demo', 'knr'),
                            'link' => esc_url('http://www.oceanwebthemes.com/pro/knrplus/'),
                        ),

                        'plus' => array(
                            'label' => __('About KnRPlus: ', 'knr'),                      
                            'text' => __('CLick Here', 'knr'),
                            'link' => esc_url('http://oceanwebthemes.com/webthemes/knr-plus-premium-wordpress-theme/'),
                        ),
                            'rate' => array(
                            'label' => __('Rate Theme: ', 'knr'),                            
                            'text' => __('Click Here', 'knr'),
                            'link' => esc_url('https://wordpress.org/support/view/theme-reviews/knr'),
                        ),

                        
                        );
         foreach ($about_knr_theme as $ftheme) {

            echo '<p>' . $ftheme['label'] . '<a target="_blank" href="' . esc_url( $ftheme['link'] ) . '" >' . esc_attr($ftheme['text']) . ' </a></p>';

         }
      }

   }
}

