<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KnR
 */

?>

<div class="single-post">
	<?php if (has_post_thumbnail()) : ?>
		<div class="media img-responsive center-block">
			<?php the_post_thumbnail('media-thumb'); ?>
		</div>
  	<?php endif; ?> 

    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
    <?php if ( 'post' === get_post_type() ) : ?>
    <h6 class="post-info"><?php echo esc_attr( get_the_date('M d Y') );?> <?php _e('- POSTED BY','knr' ); ?> <?php echo esc_attr( get_the_author_meta('display_name') );?></h6>
    <?php endif; ?>
    
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" title="" class="btn read-more"><?php _e('Read More', 'knr'); ?></a>
    
    <div class="tag-comment">
        <span class="pull-left"><i class="fa fa-tags"></i> <?php the_tags(); ?></span>
        <span class="pull-right"><i class="fa fa-comments"></i> <?php comments_popup_link(__('0 comment','knr'),__('one comment','knr'), __('% comments','knr'));?></span>
    </div>
	
</div>