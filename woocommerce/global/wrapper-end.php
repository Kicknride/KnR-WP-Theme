<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$template = get_option( 'template' );

switch( $template ) {
	case 'knrone' :
		echo '</div></div>';
		break;
	case 'knrtwo' :
		echo '</div></div>';
		break;
	case 'knrthree' :
		echo '</div></div>';
		break;
	case 'knrfour' :
		echo '</div></div></div>';
		get_sidebar( 'content' );
		break;
	default :
		get_sidebar( 'shopsidebar_left' );
		echo '</div></div></section>';
		break;
}