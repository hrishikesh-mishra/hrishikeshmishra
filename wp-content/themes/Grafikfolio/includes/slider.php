<!-- BEGIN SLIDER -->
<?php if(!is_paged()) { ?>

<div id="sliderbox_inner" class="inner clearfix">

<?php query_posts('category_name=' . get_option('eted_feat_cat') . '&showposts=' . get_option('eted_feat_num')); ?>

<div id="slider1" class="nivoSlider">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php if( get_post_meta( $post->ID, "slider", true ) ) : ?>
		<a href="<?php the_permalink() ?>">
		<img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "slider", $single = true); ?>&amp;w=960&amp;h=360&amp;zc=1" alt="<?php the_title(); ?>" width="960" height="360" />
		</a>
		<?php else : ?>
		<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php getImage('1'); ?>&amp;w=960&amp;h=360&amp;zc=1" width="960" height="360" alt="<?php the_title(); ?>" />
		</a>
		<?php endif; ?>
	
	<?php endwhile; else: ?>
	<?php endif; ?>
	
</div><!--end div #slider1-->

<?php wp_reset_query(); ?>

</div> <!-- end div sliderbox_inner -->

<?php } ?>
<!-- END SLIDER -->

