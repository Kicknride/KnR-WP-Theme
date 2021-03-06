<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KnR
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="single-page">
    	
		<?php if(has_post_thumbnail()){
			echo '<div class="featured-image">';
          	$arg =
            	array(
                  'class' => 'img-responsive',
                  'alt' => '',
                  'data-wow-duration'=> '2s'
          		);
          		the_post_thumbnail('full',$arg);
              echo esc_attr( knr_the_post_thumbnail_caption() );
          	echo '</div>';              
        	} 
        ?> 

        <div class="post-info">
            <span class="pull-left"><?php echo esc_attr( get_the_date('M d Y') );?> <?php _e('- POSTED BY','knr'); ?> <?php echo esc_html( get_the_author_meta('display_name') );?></span>
            
            <span class="pull-right"><i class="fa fa-tags"></i> <?php the_tags(); ?> &nbsp;<i class="fa fa-comments"></i> <?php comments_popup_link(__('zero comment','knr'),__('one comment','knr'), __('% comments','knr'));?></span>
            <span class="pull-left"><?php
            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            if (is_plugin_active('wp-statistics/wp-statistics.php')){
                if (wp_statistics_pages('total', '', get_the_ID ()) > 0){
                    printf(
                                        /* translators: 1: number of views */
                                                _n(
                                                        '%1$s Reading',
                                                        '%1$s Readings',
                                                        wp_statistics_pages('total', '', get_the_ID ()),
                                                        'knr'
                                                ),
                                                number_format_i18n(wp_statistics_pages('total', '', get_the_ID ())) 

                                        );
                }
            }
           ?></span>
        </div>

        <div class="clearfix"></div>

        <div class="content">
        	<?php the_content(); ?>
        	
        	<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'knr' ),
					'after'  => '</div>',
				) );
			?>
        </div>    
    

        <?php knr_post_nav(); ?>

        <div class="comment-form">            
            <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
        </div>

		<div class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'knr' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</div><!-- .entry-footer -->
	</div>
</div>