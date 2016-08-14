<?php get_header(); ?>
	
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">
			
			<div id="subtitle">
				<?php _e('Search Results'); ?>
			</div>
	
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>		
					<div id="post-<?php the_ID(); ?>" class="post clearfix">					
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
	
						<div class="post-content">
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
							<div class="entry"><?php the_excerpt(); ?></div>
						</div>
					</div> <!-- end div #post -->
				<?php endwhile; ?>
				
				<?php include (TEMPLATEPATH . '/includes/pagenav.php'); ?>

			<?php else : ?>
				<div class="post">
					<div class="entry">
						<p>Sorry, but the page you are trying to reach is unavailable or does not exist.</p>							
					</div> <!-- end div .entry -->
				</div>
			<?php endif; ?>
	      										
		</div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
