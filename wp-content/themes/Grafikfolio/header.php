<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css' />
				  
	<?php //Shortcut Icon
	if ( get_option('eted_shortcut_icon') <> "") {?><link rel="shortcut icon" href="<?php echo get_option('eted_shortcut_icon');?>" /><?php } ?>

	<?php //Custom CSS 
	if ( get_option('eted_custom_css') <> "") {$customcss = get_option('eted_custom_css');?><style><?php echo stripslashes($customcss);?></style><?php } ?>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if IE 6]>
	<script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
		DD_belatedPNG.fix('*');
	</script>
	<![endif]-->

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jqueryslidemenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js"></script>


	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>	
		
	<?php wp_head(); ?>
	
</head>

<body>
<div class="wrapper">
	
	<!-- BEGIN HEADER -->
	<div id="header">
    <div id="header-inner" class="clearfix">

		<div id="logo">
		<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">
			<?php if(get_option('eted_logo')) : ?>
				<img src="<?php echo stripslashes(get_option('eted_logo')); ?>" alt="<?php bloginfo('name'); ?>" />
			<?php else : ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
			<?php endif; ?>
		</a>	
		</div>
		<?php if (get_option('eted_activate_banner_top' ) =='true' ) {include(TEMPLATEPATH . '/includes/banner-top.php'); } ?>			
			
    </div> <!-- end div #header-inner -->
	</div> <!-- end div #header -->

	<!-- END HEADER -->

	<!-- BEGIN TOP NAVIGATION -->		
	<div id="top-nav"> 
    <div id="top-nav-inner" class="clearfix">

		<div id="myslidemenu" class="jqueryslidemenu transparent_class clearfix">
			<?php
			if (function_exists('wp_nav_menu')) {
				wp_nav_menu(array('container' => '', 'theme_location' => 'wpj-main-menu', 'fallback_cb' => 'wpj_default_menu'));
			}
			else {
				wpj_default_menu();
			}
			?>
		</div> <!-- end div #myslidemenu -->
		<div id="search"><?php include (TEMPLATEPATH . '/includes/searchform.php'); ?></div>

    </div> <!-- end div #top-nav-inner -->
	</div> <!-- end div #top-nav -->
	<!-- END TOP NAVIGATION -->
	