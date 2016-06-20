<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KnR
 */

get_header(); ?>

	<section class="page-header" style="background:#404040 url( <?php if ( get_header_image() ) { header_image(); }  ?>)">	
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <div class="block">
	                    <h2 class="page-title" style="color:#<?php echo header_textcolor(); ?>"><?php _e('Welcome to','knr'); echo ' '; echo bloginfo('title'); ?></h2>
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
					$class = 'col-md-6 col-sm-8';
					$sidebar =  get_theme_mod('sidebar_position',__('right','knr') );
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
					<?php if ( have_posts() ) : ?>
						<div class="masonry-3">
							<?php if (! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php endif; ?>

						
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
								?>

							<?php endwhile; ?>
						</div>

						<?php knr_pagination_bars(); ?>

						<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>

				<?php
				    if ($sidebar == 'right' || $sidebar == 'both'){ 
				        get_sidebar('right');
				       }
				?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>