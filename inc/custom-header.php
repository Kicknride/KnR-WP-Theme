<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package KnR-WP-Theme
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses knr_header_style()
 * @uses knr_admin_header_style()
 * @uses knr_admin_header_image()
 */
function knr_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'knr_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'FFFFFF',
		'width'                  => 1920,
		'height'                 => 350,
		'flex-height'            => true,
		'wp-head-callback'       => 'knr_header_style',
		'admin-head-callback'    => 'knr_admin_header_style',
		'admin-preview-callback' => 'knr_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'knr_custom_header_setup' );

if ( ! function_exists( 'knr_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see knr_custom_header_setup().
 */
function knr_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>

	<?php
}
endif; // knr_header_style

if ( ! function_exists( 'knr_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see knr_custom_header_setup().
 */
function knr_admin_header_style() {
?>

<?php
}
endif; // knr_admin_header_style

if ( ! function_exists( 'knr_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see knr_custom_header_setup().
 */
function knr_admin_header_image() {
?>

<?php
}
endif; // knr_admin_header_image
