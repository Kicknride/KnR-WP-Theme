<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package KnR
 */

get_header(); ?>

	<section class="page-header" style="background:#404040 url( <?php if ( get_header_image() ) { header_image(); }  ?>); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="block">
						<h1 class="page-title"><?php esc_html_e( '404 Not Found.', 'knr' ); ?></h1>
						<div class="underline"></div>
						<?php knr_breadcrumbs(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="inner-content">
		<div class="container">
			<div class="row">
				<?php
				$class = 'col-md-6';
				$sidebar =  get_theme_mod('page_not_found_sidebar_position',__('right','knr'));
				if($sidebar != 'both'){
					$class = 'col-md-9';
				}
				?>

				<?php
				if ($sidebar == 'left' || $sidebar == 'both'){
					get_sidebar('left');
				}
				?>

				<div class="<?php echo $class;?> detail-content">
					<div class="not-found">
						<h1><?php esc_html_e( '404', 'knr' ); ?></h1>
						<h3><?php esc_html_e( 'Oops, this page could not be found!', 'knr' ); ?></h3>
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe you can search', 'knr' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</div>

				<?php
				if ($sidebar == 'right' || $sidebar == 'both'){
					get_sidebar('right');
				}
				?>

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
<?php get_footer(); ?>
