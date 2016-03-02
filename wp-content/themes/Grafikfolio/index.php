<?php get_header(); ?>	
	
	<!-- BEGIN FEATURED AREA -->
	<div id="featured-area">
    <div id="featured-area-inner" class="clearfix">
		<?php if (get_option('eted_activate_featured_gallery' ) =='true' ) {include(TEMPLATEPATH . '/includes/slider.php'); } ?>
	</div> <!-- end div #featured-area-inner -->
	</div> <!-- end div #featured-area -->
	<!-- END FEATURED AREA -->


	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
    
		<div id="content">	
		
	
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post clearfix">					
				
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail(array(200,200)); 
							} ?>
						</a>
					</div>

					<div class="post-content">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
						<div class="entry"><?php the_excerpt(); ?></div>
					</div>

				</div> <!-- end div #post -->
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
				</div>
			<?php endif; ?>
			
			<?php include (TEMPLATEPATH . '/includes/pagenav.php'); ?>
		</div> <!-- end div #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
