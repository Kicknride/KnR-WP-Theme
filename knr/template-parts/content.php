<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KnR
 */

?>
<div <?php post_class(); ?> >	
<div class="single-post " >
	<?php if (has_post_thumbnail()) : ?>
		<div class="media">
    		<?php the_post_thumbnail( 'medium' );  ?>
    	</div>
  	<?php endif; ?> 

    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <h6 class="post-info"><?php echo esc_attr( get_the_date('M d Y') );?> <?php _e('- POSTED BY','knr');?> <?php echo esc_html( get_the_author_meta('display_name') );?></h6>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>" title="" class="btn read-more"><?php _e('Read More', 'knr'); ?></a>
    
    <div class="tag-comment">
            <span class="pull-right"><?php
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
            
            ?></span> 
        <span class="pull-left"><i class="fa fa-tags"></i> <?php the_tags(); ?></span>

        <span class="pull-right"><i class="fa fa-comments"></i> <?php comments_popup_link(__('0 comment','knr'),__('one comment','knr'), __('% comments','knr'));?></span>
    </div>
</div>
</div>