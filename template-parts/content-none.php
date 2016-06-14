<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KnR
 */

?>


<div class="single-page">
	<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'knr' ); ?></h1>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'knr' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'knr' ); ?></p>
			<aside class="sidebar">
				<div class="single">
					<?php get_search_form(); ?>
				</div>
			</aside>
		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'knr' ); ?></p>
			<aside class="sidebar">
				<div class="single">
					<?php get_search_form(); ?>
				</div>
			</aside>

		<?php endif; ?>
	</div><!-- .page-content -->
</div>