<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KnR
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>


<div class="col-md-3">
	<aside class="sidebar">
    	<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </aside> 
</div> <!-- /.end of col 3 --> 